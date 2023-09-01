@extends('layouts.guest')
@section('title', $title)
@section('content')

<div class="container-beranda">

    <!-- 1 -->
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-bottom: 36px;">
                <h2 class="font-weight-bold" style="font-size: 56px; font-weight: 700">Bingung Mau Nitip</h2>
                <h2 class="font-weight-bold" style="font-size: 56px; font-weight: 700">Barang Dimana?</h2>
                <h2 class="font-weight-bold" style="font-size: 56px; font-weight: 700"><span style="color: #068113">Titipsini</span> aja!</h2>
                <p class="p-beranda">Semua bisa dititipkan termasuk barang, rumah atau
                    kendaraan.
                </p>
                <a href="#" class="btn-beranda-1">Download Sekarang</a>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/img/beranda-1.png') }}" class="img-fluid" alt="Gambar Layanan" style="margin-top: -50px;">
            </div>
        </div>
    </div>

    <!-- 2 -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('/img/beranda-2.png') }}" class="img-fluid" alt="Gambar Layanan" style="margin-top: -50px;">
            </div>
            <div class="col-md-6" style="margin-bottom: 36;">
                <h2 class="font-weight-bold" style="font-size: 48px; font-weight: 700">Layanan Penitipan Pertama di
                    Indonesia
                </h2>
                <p>Di sini kami menawarkan berbagai pilihan layanan penitipan seperti penitipan barang, kendaraan dan
                    bangunan.
                </p>
            </div>
        </div>
    </div>

    <!-- 3 -->
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-bottom: 36px;">
                <h2 class="font-weight-bold" style="font-size: 48px; font-weight: 700">Tersedia di Berbagai Kota di
                    Indonesia!
                </h2>
                <p>Anda dapat dengan mudah menemukan layanan terdekat di daerah Anda.
                </p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/img/beranda-3.png') }}" class="img-fluid" alt="Gambar Layanan">
            </div>
        </div>
    </div>

    <!-- 4 -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('/img/beranda-4.png') }}" class="img-fluid" alt="Gambar Layanan">
            </div>
            <div class="col-md-6" style="margin-bottom: 36;">
                <h2 class="font-weight-bold" style="font-size: 48px; font-weight: 700">Promo Cashback 30%</h2>
                <p>Khusus pengguna baru tersedia promo <span style="font-weight: 700;">cashback</span> besar-besaran.
                </p>
            </div>
        </div>
    </div>

    <!-- 5 -->
    <div class="container" style="background-color: var(--grey-300, #D4DBEA); border-radius: 36px;">
        <div class="row">
            <div class="col-12 text-center" style="padding: 32px 0;">
                <h2 class="font-weight-bold" style="font-size: 36px; font-weight: 700">Tunggu Apalagi?<br> Ayo Buruan
                    Download <span style="color: #068113">Titipsini</span> Sekarang!</h2>
                <p style="margin: 0 0 28px;">Semua bisa dititipkan termasuk barang, rumah atau kendaraan.</p>
                <a href="#" class="btn-beranda-2">Download Sekarang</a>
            </div>
        </div>
    </div>

</div>

@endsection