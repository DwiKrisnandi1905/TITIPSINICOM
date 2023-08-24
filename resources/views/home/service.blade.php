@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="container-layanan">
    <h1>Silahkan Pilih Layanan <br> yang Anda Butuhkan</h1>
    <div class="row">
    <div class="card">
    <img src="{{ asset('img/truck.png') }}" alt="truck">
        <h2>Judul Card</h2>
        <p>Isi dari card ini.</p>
    </div>
    <div class="card">
    <img src="{{ asset('img/truck.png') }}" alt="truck">
        <h2>Judul Card</h2>
        <p>Isi dari card ini.</p>
    </div>
    <div class="card">
    <img src="{{ asset('img/truck.png') }}" alt="truck">
        <h2>Judul Card</h2>
        <p>Isi dari card ini.</p>
    </div>
    </div>
</div>

@endsection