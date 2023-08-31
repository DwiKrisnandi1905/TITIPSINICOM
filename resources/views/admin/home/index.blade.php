@extends('admin.dashboard')
@section('content')

<div class="container mt-1 home">
    <div class="row">
        <div class="col">
            <h2 style="margin-left: 28px; font-weight: 700;">Maret 2023</h2>
        </div>
        <div class="col text-end">
            <div class="dropdown dropdown-end1">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
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
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
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
        <div class="row justify-content-between">
            <div class="col">
                <div class="container-col custom-style">
                    Konten Kolom 1
                </div>
            </div>
            <div class="col">
                <div class="container-col custom-style">
                    Konten Kolom 2
                </div>
            </div>
            <div class="col">
                <div class="container-col custom-style">
                    Konten Kolom 3
                </div>
            </div>
            <div class="col">
                <div class="container-col custom-style">
                    Konten Kolom 4
                </div>
            </div>
        </div>
    </div>


</div>

@endsection