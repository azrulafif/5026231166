@extends('template')
@section('content')
	<h3>Tambah Karyawan</h3>

	<a href="/eas/" class="btn btn-info">Kembali</a>

	<br/><br/>

	<form action="/eas/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group">
            <label class="control-label col-sm-2" for="nip">
                Nip
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="teks"
                       id="nip"
                       placeholder="Masukkan NIP"
                       name="nip"
                       required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="nama">
                Nama
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="teks"
                       id="nama"
                       placeholder="Masukkan Nama"
                       name="nama"
                       required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="pangkat">
                Pangkat
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="teks"
                       id="pangkat"
                       placeholder="Masukkan Pangkat"
                       name="pangkat"
                       required="required">
            </div>
        </div>

       <div class="form-group">
            <label class="control-label col-sm-2" for="gaji">
                Gaji
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="teks"
                       id="gaji"
                       placeholder="Masukkan gaji"
                       name="gaji"
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
