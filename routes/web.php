<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/inicio', function () {
    return view('index');
})->name('inicio');

Route::get('/blog', function () {
    return view('about');
})->name('blog');

Route::get('/contacto', function () {
    return view('contact');
})->name('contacto');

Route::get('/post', function () {
    return view('post');
})->name('post');