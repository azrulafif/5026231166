@extends('template')
@section('content')

<div class="container mt-5">
    <div class="text-center mb-4">
        <h3>Data Genteng</h3>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="/genteng/tambah" class="btn btn-primary">+ Tambah Data Genteng</a>
        <form action="/genteng/cari" method="GET" class="d-flex" style="width: 50%;">
            <input type="text" name="cari" class="form-control me-2" placeholder="Cari Merk Genteng ..">
            <button type="submit" class="btn btn-info">Cari</button>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>Merk Genteng</th>
                    <th>Harga</th>
                    <th>Tersedia</th>
                    <th>Berat</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($genteng as $g)
                <tr>
                    <td class="align-middle">{{ $g->merkgenteng }}</td>
                    <td class="align-middle">Rp{{ number_format($g->hargagenteng, 0, ',', '.') }}</td>
                    <td class="align-middle">{{ $g->tersedia ? 'Ya' : 'Tidak' }}</td>
                    <td class="align-middle">{{ $g->berat }} kg</td>
                    <td class="align-middle">
                        <a href="/genteng/edit/{{ $g->id }}" class="btn btn-success btn-sm">Edit</a>
                        <a href="/genteng/hapus/{{ $g->id }}" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center">
        {{ $genteng->links() }}
    </div>
</div>

@endsection
