<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newsController extends Controller
{
    public $new = '#hola queso';
    public function index() {
        return view('news');
    }
    public function watch($new) {
        return view('new', ["new" => $this->new]);
    }
}
