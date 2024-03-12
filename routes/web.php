<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/contacto', [contactController::class, 'index'])->name('contacto');
Route::get('/blog', [blogController::class, 'index'])->name('blog');
