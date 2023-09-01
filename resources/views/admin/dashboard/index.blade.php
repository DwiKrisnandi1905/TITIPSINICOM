@extends('layouts.admin')
@section('content')
    <div class="container mt-1 home">
        <div class="row">
            <div class="col">
                <h2 style="margin-left: 28px; font-weight: 700;">Maret 2023</h2>
            </div>
            <div class="col text-end">
                <div class="dropdown dropdown-end1">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Month
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">March</a></li>
                        <li><a class="dropdown-item" href="#">April</a></li>
                        <li><a class="dropdown-item" href="#">May</a></li>
                    </ul>
                </div>
            </div>
            <div class="col text-end">
                <div class="dropdown dropdown-end2">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Year
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item" href="#">2022</a></li>
                        <li><a class="dropdown-item" href="#">2023</a></li>
                        <li><a class="dropdown-item" href="#">2024</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="content-total">
            <div class="row">
                <div class="col-md-3">
                    <div class="container-total text-center">
                        <h2 style="font-size: 24px;">Total Pengguna</h2>
                        <h1 class="text-total">20</h1>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="container-total text-center">
                        <h2 style="font-size: 24px;">Total Customer</h2>
                        <h1 class="text-total">20</h1>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="container-total text-center">
                        <h2 style="font-size: 24px;">Total Vendor</h2>
                        <h1 class="text-total">20</h1>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="container-total text-center">
                        <h2 style="font-size: 24px;">Total Layanan</h2>
                        <h1 class="text-total">20</h1>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
