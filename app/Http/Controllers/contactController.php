<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Transport\Smtp\EsmtpTransport;
use Symfony\Component\Mailer\Mailer;


class contactController extends Controller
{
    public function index() {
        return view('contact');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ];

        // Configuración de transporte SMTP (ajusta según tu configuración)
        $transport = new EsmtpTransport(env('MAIL_HOST'), env('MAIL_PORT'));
        $mailer = new Mailer($transport);

        // Creación del correo
        $email = (new Email())
            ->from($data['email'])
            ->to(env('MAIL_FROM_ADDRESS'))
            ->subject('New Contact Message')
            ->html('Name: '.$data['name'].'<br>Email: '.$data['email'].'<br>Message: '.$data['message']);

        // Envío del correo
        try {
            $mailer->send($email);
            return response()->json(['message' => 'Email sent successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to send email: ' . $e->getMessage()], 500);
        }
    }
}
