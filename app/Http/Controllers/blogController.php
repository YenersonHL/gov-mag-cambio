<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index() {
        return view('blog');
    }
    public function blog($id) {
        return view('blogs.' . $id);
    }
}
