@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="wrapper">
    <!-- 1 -->
    <section>
        <div class="container-beranda-1">
            <div class="kolom-1">
                <h2 style="font-weight:700; font-size: 64px">Bingung Mau Nitip Barang Dimana?</h2>
                <h2 style="font-weight:700; font-size:56px"><span style="color: #068113">Titipsini</span> aja!</h2>
                <p style="margin-bottom: 50px; margin-top: 30px">Semua bisa dititipkan termasuk barang, rumah atau kendaraan.</p>
                <a href="#" class="btn-beranda-1">Download Sekarang</a>
            </div>
            <img src="{{ asset('/img/beranda-1.png') }}" width="400px" lenght="400px" style="margin-top: -50px;"/>
        </div>
    </section>
</div>
@endsection