@extends('template')
@section('content')

<div class="container mt-4">
    <h3 class="mb-4 text-center text-primary">Keranjang Belanja</h3>
    <hr class="mb-4">

    {{-- Asumsi Anda mungkin ingin menampilkan pesan sukses juga di keranjang belanja --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {{-- Jika Anda ingin ada tombol Tambah Baru atau Cari seperti di Karyawan, tambahkan di sini --}}
    {{-- Contoh:
    <div class="row mb-3 align-items-center justify-content-between">
        <div class="col-md-4 mb-2 mb-md-0">
            <a href="/keranjang/tambah-item" class="btn btn-primary btn-block">
                + Tambah Item Baru
            </a>
        </div>
        <div class="col-md-5 mx-auto">
            <form action="/keranjang/cari" method="GET" class="form-inline d-flex">
                <div class="input-group flex-grow-1">
                    <input type="text" class="form-control" name="cari" placeholder="Cari Kode Barang..." value="{{ request('cari') }}">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-outline-info">
                            Cari
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    --}}

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            {{-- Menggunakan style header yang sama dengan tabel Karyawan --}}
            <thead style="background-color: #0056b3; color: #ffffff;">
                <tr>
                    <th>Kode Pembelian</th>
                    <th>Kode Barang</th>
                    <th>Jumlah Pembelian</th>
                    <th>Harga per Item</th>
                    <th>Total</th>
                    <th class="text-center" style="width: 150px;">Aksi</th> {{-- Sesuaikan lebar kolom aksi --}}
                </tr>
            </thead>
            <tbody>
                @forelse ($keranjangs as $keranjang)
                    <tr>
                        <td>{{ $keranjang->ID }}</td>
                        <td>{{ $keranjang->KodeBarang }}</td>
                        <td>{{ $keranjang->Jumlah }}</td>
                        <td>Rp {{ number_format($keranjang->Harga, 0, ',', '.') }}</td>
                        <td>Rp {{ number_format($keranjang->Jumlah * $keranjang->Harga, 0, ',', '.') }}</td>
                        <td class="text-center">
                            {{-- Mempertahankan tombol aksi asli "Beli" dan "Batal" --}}
                            <a href="/keranjang/tambah/{{ $keranjang->ID }}" class="btn btn-sm btn-success mr-1">Beli</a> {{-- btn-sm dan mr-1 untuk jarak --}}
                            <a href="/keranjang/hapus/{{ $keranjang->ID }}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin membatalkan pembelian ini?')">Batal</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-4 text-muted">
                            Keranjang belanja kosong.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>


    <div class="d-flex justify-content-center mt-4">
        {{ $keranjangs->links('pagination::bootstrap-4') }} {{-- Menggunakan template paginasi Bootstrap 4 --}}
    </div>
</div>

@endsection
