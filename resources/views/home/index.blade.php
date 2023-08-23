@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="row">
    <div class="col-md-6 col-lg-6 mb-2">
        <p style="color: #000; font-family: Poppins; font-size: 36px; font-style: normal; font-weight: 500; line-height: normal; margin-left: 70px">Bingung mau nitip barang dimana?</p>
        <p style="color: #000; font-family: Poppins; font-size: 24px; font-style: normal; font-weight: 500; line-height: normal; margin-bottom: 40px; margin-left: 70px">Titip sini aja!</p>
        <p style="color: #000; font-family: Poppins; font-size: 18px; font-style: normal; font-weight: 400; line-height: normal; margin-bottom: 20px; margin-left: 70px">Semua bisa dititipkan termasuk barang, rumah atau kendaraan.</p>
        <a class="badge badge-edit text-white bg-primary rounded-pill d-inline" href="#" style="text-decoration: none; margin-left: 70px; display: flex; width: 300px; padding: 10px;">Titip sekarang!</a>
        <div class="row">
            
            <p style="color: #000; font-family: Poppins; font-size: 18px; font-style: normal; font-weight: 500; line-height: normal; margin-bottom: 40px; margin-left: 70px; margin-top: 40px">Melayani 24 jam.</p>
        </div>
    </div>
</div>
@endsection