<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\coba;
use App\HTTP\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\GentengController;


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


Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('/pegawai',[PegawaiDBController::class,'index']);
Route::get('/pegawai/tambah',[PegawaiDBController::class,'tambah']);
Route::post('/pegawai/store',[PegawaiDBController::class,'store']);
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class,'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class,'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class,'hapus']);

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

Route::get('/genteng', [GentengController::class, 'index']);
Route::get('/genteng/tambah', [GentengController::class, 'tambah']);
Route::post('/genteng/store', [GentengController::class, 'store']);
Route::get('/genteng/edit/{id}', [GentengController::class, 'edit']);
Route::post('/genteng/update', [GentengController::class, 'update']);
Route::get('/genteng/hapus/{id}', [GentengController::class, 'hapus']);
Route::get('/genteng', [GentengController::class, 'index']);
Route::get('/genteng/cari', [GentengController::class, 'cari']);


