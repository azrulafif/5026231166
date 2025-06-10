@extends('template')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <h3 class="text-center mb-4">Edit Data Genteng</h3>

            <a href="/genteng" class="btn btn-info mb-3">Kembali</a>

            @foreach($genteng as $g)
            <form action="/genteng/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $g->id }}">

                <div class="form-group mb-3">
                    <label for="merkgenteng">Merk Genteng</label>
                    <input type="text" class="form-control" name="merkgenteng" id="merkgenteng" value="{{ $g->merkgenteng }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="hargagenteng">Harga</label>
                    <input type="number" class="form-control" name="hargagenteng" id="hargagenteng" value="{{ $g->hargagenteng }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="tersedia">Tersedia</label>
                    <select class="form-control" name="tersedia" id="tersedia" required>
                        <option value="1" {{ $g->tersedia ? 'selected' : '' }}>Ya</option>
                        <option value="0" {{ !$g->tersedia ? 'selected' : '' }}>Tidak</option>
                    </select>
                </div>

                <div class="form-group mb-4">
                    <label for="berat">Berat (kg)</label>
                    <input type="number" step="0.01" class="form-control" name="berat" id="berat" value="{{ $g->berat }}" required>
                </div>

                <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Simpan Data">
                </div>
            </form>
            @endforeach

        </div>
    </div>
</div>
@endsection
