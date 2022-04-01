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
Route::get('/posts/{post}',[PostController::class,'show'])->name('posts');

Route::get('/categoria/{categoria}',[PostController::class,'category'])->name('categoria');

Route::get('post', function () {
    return view('welcome');
})->name('post');

Route::get('/blog', function () {
    return view('about');
})->name('blog');

Route::get('/contacto', function () {
    return view('contact');
})->name('contacto');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
