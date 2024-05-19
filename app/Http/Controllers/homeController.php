<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\MediaNews;


class homeController extends Controller
{
    use MediaNews;

    public function index() {
        return view('welcome', ['news' => $this->mediaNews]);
    }
}
