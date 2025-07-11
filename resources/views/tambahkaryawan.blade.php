@extends('template')
@section('content')
	<h3>Tambah Karyawan</h3>

	<a href="/karyawan" class="btn btn-info">Kembali</a>

	<br/><br/>

	<form action="/karyawan/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group">
            <label class="control-label col-sm-2" for="kodepegawai">
                Kode Pegawai
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="teks"
                       id="kodepegawai"
                       placeholder="Masukkan Kode Pegawai"
                       name="kodepegawai"
                       required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="namalengkap">
                Nama Lengkap
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="teks"
                       id="namalengkap"
                       placeholder="Masukkan Nama Lengkap"
                       name="namalengkap"
                       required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="departemen">
                Departemen
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="teks"
                       id="departemen"
                       placeholder="Masukkan Departemen"
                       name="departemen"
                       required="required">
            </div>
        </div>

       <div class="form-group">
            <label class="control-label col-sm-2" for="divisi">
                Divisi
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="teks"
                       id="divisi"
                       placeholder="Masukkan Divisi"
                       name="divisi"
                       required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </div>
        </div>

	</form>
@endsection
