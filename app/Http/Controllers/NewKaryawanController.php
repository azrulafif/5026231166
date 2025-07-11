<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewKaryawanController extends Controller
{
    public function indexnewkaryawan()
    {
        $newkaryawan = DB::table('newkaryawan')->paginate(10);
        return view('indexnewkaryawan', ['newkaryawan' => $newkaryawan]);
    }
      public function tambah()
    {
        return view('tambahnewkaryawan');
    }

    public function store(Request $request)
    {
        DB::table('newkaryawan')->insert([
            'nip'   => $request->nip,
            'nama'  => $request->nama,
            'pangkat'=> $request->pangkat,
            'gaji' => $request->gaji,
        ]);
        return redirect('/eas');
}
     public function hapus($nip)
    {
        DB::table('newkaryawan')->where('nip', $nip)->delete();
        return redirect('/eas')->with('success', 'Data karyawan berhasil dihapus!');
    }
}
