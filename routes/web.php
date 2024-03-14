<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\newController;
use App\Http\Controllers\newsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/contacto', [contactController::class, 'index'])->name('contacto');
Route::get('/blog', [blogController::class, 'index'])->name('blog');
Route::get('/noticias', [newsController::class, 'index'])->name('noticias');
Route::get('/noticia/{noticia}', [newsController::class, 'watch'])->name('noticias');
