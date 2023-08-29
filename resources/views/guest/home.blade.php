@extends('layouts.app')
@section('title', $title)
@section('content')

<div class="wrapper">
    <!-- 1 -->
    <section>
        <div class="container-beranda-1">
            <div class="kolom-1">
                <h2 class="kolom-1-h2-1">Bingung Mau Nitip Barang Dimana?</h2>
                <h2 class="kolom-1-h2-2"><span style="color: #068113">Titipsini</span> aja!</h2>
                <p class="kolom-1-p">Semua bisa dititipkan termasuk barang, rumah atau
                    kendaraan.</p>
                <a href="#" class="btn-beranda-1">Download Sekarang</a>
            </div>
            <div class="beranda-img1">
                <img src="{{ asset('/img/beranda-1.png') }}" width="400px" lenght="400px" style="margin-top: -50px; margin-right: 30px"/>
            </div>
        </div>
    </section>

    <!-- 2 -->
    <section>
        <div class="container-beranda-1">
            <img src="{{ asset('/img/beranda-2.png') }}" width="700px" lenght="500px" style="margin-top: -50px; margin-right: 30px" />
            <div class="kolom-2">
                <h2 style="font-weight:700; font-size: 36px">Layanan Penitipan Pertama di Indonesia</h2>
                <p style="margin-bottom: 50px; margin-top: 24px">Di sini kami menawarkan berbagai pilihan layanan
                    penitipan seperti penitipan barang, kendaraan dan bangunan.</p>
            </div>
        </div>
    </section>

    <!-- 3 -->
    <section>
        <div class="container-beranda-1">
            <div class="kolom-2">
                <h2 style="font-weight:700; font-size: 36px">Tersedia di Berbagai Kota di Indonesia!</h2>
                <p style="margin-bottom: 50px; margin-top: 24px">Anda dapat dengan mudah menemukan layanan terdekat di
                    daerah Anda.</p>
            </div>
            <img src="{{ asset('/img/beranda-3.png') }}" width="600px" lenght="600px" style="margin-top: 0px; margin-right: -50px" />
        </div>
    </section>

    <!-- 4 -->
    <section>
        <div class="container-beranda-1">
            <img src="{{ asset('/img/beranda-4.png') }}" width="700px" lenght="500px" style="margin-top: 50px; margin-left: -50px" />
            <div class="kolom-4">
                <h2 style="font-weight:700; font-size: 36px">Promo Cashback 30%</h2>
                <p style="margin-bottom: 50px; margin-top: 24px">Khusus pengguna baru tersedia promo <span style="font-weight: 700;">cashback</span> <br> besar-besaran.</p>
            </div>
        </div>
    </section>

    <!-- 5 -->
    <section>
        <div class="container-beranda-2">
            <h2 style="font-weight:700; font-size: 32px;">Tunggu Apalagi?</h2>
            <h2 style="font-weight:700; font-size: 32px">Ayo Buruan Download <span style="color: #068113">Titipsini</span> Sekarang!</h2>
            <p style="margin-top: 35px; margin-bottom: 35px; font-size: 18px">Semua bisa dititipkan termasuk barang,
                rumah atau kendaraan.</p>
            <a href="#" class="btn-beranda-2">Download Sekarang</a>
        </div>
    </section>
</div>

@endsection