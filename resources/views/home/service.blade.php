@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="container-layanan">
    <h1>Silahkan Pilih Layanan <br> yang Anda Butuhkan</h1>
    <div class="horizontal-line"></div>
    <div class="row">
        <div class="card">
            <img src="{{ asset('img/truck.png') }}" alt="truck">
            <h2>Kendaraan</h2>
            <p>Layanan yang kami sediakan</p>
            <ul>
                <li>Kontrol setiap pagi</li>
                <li>Kendaraan dibersihkan</li>
                <li>Free cuci kendaraan</li>
                <li>Konsultasi & support</li>
            </ul>
            <h3>IDR 100K/Hari</h3>
        </div>
        <div class="card">
            <img src="{{ asset('img/home.png') }}" alt="truck">
            <h2>Rumah</h2>
            <p>Layanan yang kami sediakan</p>
            <ul>
                <li>Kontrol rumah setiap pagi</li>
                <li>Rumah dibersihkan</li>
                <li>Keamanan terjaga</li>
                <li>Konsultasi & support</li>
            </ul>
            <h3>IDR 200K/Hari</h3>

        </div>
        <div class="card">
            <img src="{{ asset('img/package.png') }}" alt="truck">
            <h2>Barang</h2>
            <p>Layanan yang kami sediakan</p>
            <ul>
                <li>Kontrol setiap pagi</li>
                <li>Barang dibersihkan</li>
                <li>Barang terjaga</li>
                <li>Konsultasi & support</li>
            </ul>
            <h3>IDR 50K/Hari</h3>
        </div>
    </div>
</div>

@endsection