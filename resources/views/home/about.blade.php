@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
<link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
<div class="about">
    <img src="{{ asset('img/Gambarabout.png') }}" alt="Gambarabout">
    <h2>Layanan Penitipan Pertama<br/>di Indonesia yang
Ada dan <br> Dipercaya Kredibilitasnya</h2>
    <p>Kami menyediakan jasa penitipan bagi anda yang ingin <br> 
    menitipkan barang. Selain itu, kami juga menyediakan <br> 
    layanan penitipan bangunan seperti rumah maupun <br> 
    gedung. Tersedia juga layanan penitipan kendaraan. <br> 
    Hadir di 3 Kota Besar Indonesia.</p>
</div>
@endsection