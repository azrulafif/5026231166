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
                    <th>Kode Pegawai</th>
                    <th>Nama Lengkap</th>
                    <th>Divisi</th>
                    <th>Departemen</th>
                </tr>
            </thead>
            <tbody>
                @foreach($karyawan as $k)
                <tr>
               <td class="align-middle">{{ $k->kodepegawai }}</td>
                    <td class="align-middle">{{ strtoupper($k->namalengkap) }}</td>
                    <td class="align-middle">{{ $k->divisi }}</td>
                    <td class="align-middle">{{ strtolower($k->departemen) }}</td>
                    <td class="align-middle">
                        <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="/karyawan/tambah" class="btn btn-primary">+ Tambah Data Karyawan</a>
     </form>
    </div>

    <div class="d-flex justify-content-center">
        {{ $karyawan->links() }}
    </div>
</div>

@endsection
