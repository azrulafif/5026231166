<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\coba;


Route::get('/', function () {
    return view('welcome');
}); //simple controller

Route::get('/selamat', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1> Halo, Selamat datang di tutorial laravel www.malasngoding.com </h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello',{coba::class, 'helloword'});
