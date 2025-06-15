@extends('template')More actions
@section('content')

<div class="container mt-5 text-center">
    <div class="card text-white bg-primary mb-3 mx-auto" style="max-width: 25rem;">
        <div class="card-header">Jumlah Pengunjung Website</div>
        <div class="card-body">
            <h1 class="card-title display-3">{{ $jumlah }}</h1>
            <p class="card-text">Anda adalah pengunjung ke-{{ $jumlah }}</p>
        </div>
    </div>
</div>

@endsection
