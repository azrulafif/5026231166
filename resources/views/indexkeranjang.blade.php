@extends('template')
@section('content')

<div class="container mt-4">
    <h3 class="text-center mb-4">Keranjang Belanja</h3>
    <a href="/keranjang/tambah" class="btn btn-primary mb-3">Beli</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per Item</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
        @foreach($keranjangs as $k)
        <tr>
            <td>{{ $k->ID }}</td>
            <td>{{ $k->KodeBarang }}</td>
            <td>{{ $k->Jumlah }}</td>
            <td>Rp {{ number_format($k->Harga, 0, ',', '.') }}</td>
            <td>Rp {{ number_format($k->Jumlah * $k->Harga, 0, ',', '.') }}</td>
            <td>
                <a href="/keranjang/hapus/{{ $k->ID }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Batal</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection
