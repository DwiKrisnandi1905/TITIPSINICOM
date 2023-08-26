@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="container-tentang">
    <div class="image">
        <img src="{{ asset('img/Gambarabout.png') }}" alt="Gambarabout">
    </div>
    <div class="text">
        <h2>Layanan Penitipan Pertama <br>
            di Indonesia yang Ada dan <br>
            Dipercaya Kredibilitasnya</h2>
        <p>Kami menyediakan jasa penitipan bagi anda yang ingin <br>
            menitipkan barang. Selain itu, kami juga menyediakan <br>
            layanan penitipan bangunan seperti rumah maupun <br>
            gedung. Tersedia juga layanan penitipan kendaraan. <br>
            Hadir di 3 Kota Besar Indonesia.</p>
    </div>
</div>
@endsection