<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectsController extends Controller
{
    public function index()
    {
        return view('projects');
    }
    public function project($id)
    {
        return view('projects.' . $id);
    }
}
