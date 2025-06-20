<?php

public function indexkeranjang()
{
    $keranjangs = DB::table('keranjangbelanja')->get();
    return view('indexkeranjang', compact('keranjangs'));
}

public function tambahkeranjang()
{
    return view('tambahkeranjang');
}

public function storekeranjang(Request $request)
{
    DB::table('keranjangbelanja')->insert([
        'KodeBarang' => $request->KodeBarang,
        'Jumlah' => $request->Jumlah,
        'Harga' => $request->Harga,
    ]);
    return redirect('/keranjang')->with('success', 'Data berhasil ditambahkan!');
}

public function hapuskeranjang($id)
{
    DB::table('keranjangbelanja')->where('ID', $id)->delete();
    return redirect('/keranjang')->with('success', 'Data berhasil dihapus!');
}
