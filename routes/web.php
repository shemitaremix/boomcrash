<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Rutas Post
|--------------------------------------------------------------------------
|
| Aqui se encontraran todas las rutas de los post creados 
| de misma manera la vista a la que este va a retornar
|
*/

Route::get('/',[PostController::class,'index'])->name('inicio');

Route::get('/blog', function () {
    return view('about');
})->name('blog');

Route::get('/contacto', function () {
    return view('contact');
})->name('contacto');

Route::get('/post', function () {
    return view('post');
})->name('post');

Route::get('/index', function () {
    return view('post');
})->name('post');