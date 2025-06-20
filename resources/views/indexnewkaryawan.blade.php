@extends('template')
@section('content')

<div class="container mt-5">
    <div class="text-center mb-4">
        <h3>Data Karyawan</h3>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>nip</th>
                    <th>Nama</th>
                    <th>pangkat</th>
                    <th>gaji</th>
                </tr>
            </thead>
            <tbody>
                @foreach($newkaryawan as $n)
                <tr>
               <td class="align-middle">{{ $n->nip }}</td>
                    <td class="align-middle">{{$n->nama}}</td>
                    <td class="align-middle">{{ $n->pangkat }}</td>
                    <td class="align-middle">Rp {{ number_format($n->gaji, 0, ',', '.') }}</td>
                    <td class="align-middle">
                        <a href="/eas/hapus/{{ $n->nip }}" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="/eas/tambah" class="btn btn-primary">+ Tambah Data Karyawan</a>
     </form>
    </div>
</div>
@endsection
