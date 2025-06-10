<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GentengController extends Controller
{
    public function index()
    {
        $genteng = DB::table('genteng')->paginate(10);
        return view('indexgenteng', ['genteng' => $genteng]);
    }

    public function tambah()
    {
        return view('tambahgenteng');
    }

    public function store(Request $request)
    {
        DB::table('genteng')->insert([
            'merkgenteng'   => $request->merkgenteng,
            'hargagenteng'  => $request->hargagenteng,
            'tersedia'      => $request->tersedia,
            'berat'         => $request->berat
        ]);
        return redirect('/genteng');
    }

    public function edit($id)
    {
        $genteng = DB::table('genteng')->where('id', $id)->get();
        return view('editgenteng', ['genteng' => $genteng]);
    }

    public function update(Request $request)
    {
        DB::table('genteng')->where('id', $request->id)->update([
            'merkgenteng'   => $request->merkgenteng,
            'hargagenteng'  => $request->hargagenteng,
            'tersedia'      => $request->tersedia,
            'berat'         => $request->berat
        ]);
        return redirect('/genteng');
    }

    public function hapus($id)
    {
        DB::table('genteng')->where('id', $id)->delete();
        return redirect('/genteng');
    }

    public function cari(Request $request)
{
    $cari = $request->cari;

    $genteng = DB::table('genteng')
        ->where('merkgenteng', 'like', "%{$cari}%")
        ->paginate(10)
        ->appends(['cari' => $cari]); // ⬅ penting!

    return view('indexgenteng', ['genteng' => $genteng]);
}
}
