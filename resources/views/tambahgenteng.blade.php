@extends('template')
@section('content')
	<h3>Tambah Data Genteng</h3>

	<a href="/genteng" class="btn btn-info">Kembali</a>

	<br/><br/>

	<form action="/genteng/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group">
            <label class="control-label col-sm-2" for="merkgenteng">
                Merk Genteng
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="text"
                       id="merkgenteng"
                       placeholder="Masukkan Merk Genteng"
                       name="merkgenteng"
                       required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="hargagenteng">
                Harga Genteng
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="number"
                       id="hargagenteng"
                       placeholder="Masukkan Harga Genteng"
                       name="hargagenteng"
                       required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="tersedia">
                Tersedia
            </label>
            <div class="col-sm-6">
                <select class="form-control" name="tersedia" id="tersedia" required>
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="berat">
                Berat (kg)
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="number"
                       step="0.01"
                       id="berat"
                       placeholder="Masukkan Berat"
                       name="berat"
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
