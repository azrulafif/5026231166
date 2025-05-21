<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\coba;
use App\HTTP\Controllers\PegawaiController;
use App\HTTP\Controllers\BlogController;
// import java.io; (sama kayak use)

// System.out.println("Hello World");
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1> Halo, Selamat datang di tutorial laravel www.malasngoding.com </h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pertama', function () {
	return view('pertama');
});
Route::get('bootstrap1', function () {
	return view('bootstrap1');
});
Route::get('bootstrap2', function () {
	return view('bootstrap2');
});
Route::get('bootstrap2', function () {
	return view('bootstrap2');
});
Route::get('layout', function () {
	return view('layout');
});
Route::get('Linktree', function () {
	return view('Linktree');
});
Route::get('dosen',[coba::class,'index']);

Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);// adalah isian formulir
Route::post('/formulir/proses',[PegawaiController::class, 'proses']);// action form

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
