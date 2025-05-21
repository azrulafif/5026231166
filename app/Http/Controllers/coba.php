<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class coba extends Controller
{
    //
    public function helloword()
    {
        return view('blog');
    }
    public function index(){
        $nama = "Azrul Afif S";
        $umur = 35;
        $alamat = "Surabaya";
        $pelajaran =["Alghoritma & Pemrogaman","Kalkulus","Pemrogaman Web"];
    	return view('biodata', ['nama' => $nama, 'usia' => $umur, 'alamat' => $alamat, 'matkul' => $pelajaran]);
    }
}
