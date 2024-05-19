<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usController extends Controller
{
    public function index()
    {
        return view('us');
    }
    public function us($id)
    {
        return view('us.' . $id);
    }
}
