<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\projectsController;
use App\Http\Controllers\usController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'index']);
// contacto
Route::get('/contacto', [contactController::class, 'index'])->name('contacto');
// blog
Route::get('/blog', [blogController::class, 'index'])->name('blog');
Route::get('/blog/{id}', [blogController::class, 'blog'])->name('blog');
// proyectos
Route::get('/proyectos', [projectsController::class, 'index'])->name('proyectos');
Route::get('/proyectos/{id}', [projectsController::class, 'project'])->name('proyectos');
// nosotros
Route::get('/nosotros', [usController::class, 'index'])->name('nosotros');
Route::get('/nosotros/{id}', [usController::class, 'us'])->name('nosotros');
// noticias
Route::get('/noticias', [newsController::class, 'index'])->name('noticias');
Route::get('/noticias/{noticia}', [newsController::class, 'watch'])->name('noticias');
