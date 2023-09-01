@extends('layouts.admin')
@section('content')
<div class="container mt-1 home">
    <div class="row">
        <div class="col" style="margin-left: 150px;">
            <h2 style="font-weight: 700;">
                {{ request('month') ? date('F', mktime(0, 0, 0, request('month'), 10)) : date('F') }}
                {{ request('year') ?? date('Y') }}
            </h2>
        </div>
        <div class="col text-end">
            <div class="dropdown dropdown-end1">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Month
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    @for ($i = 1; $i <= 12; $i++) <li>
                        <a class="dropdown-item" href="{{ route('admin.dashboard', ['month' => $i, 'year' => request('year')]) }}">
                            {{ date('F', mktime(0, 0, 0, $i, 10)) }}
                        </a>
                        </li>
                        @endfor
                </ul>
            </div>
        </div>
        <div class="col text-end">
            <div class="dropdown dropdown-end2">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    Year
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    @for ($i = 0; $i < 5; $i++) <li><a class="dropdown-item" href="{{ route('admin.dashboard', ['month' => request('month'), 'year' => date('Y') - $i]) }}">{{ date('Y') - $i }}</a>
                        </li>
                        @endfor
                </ul>
            </div>
        </div>
    </div>

    <div class="content-total">
        <div class="row">
            <div class="col-md-3">
                <div class="container-total text-center">
                    <h2 style="font-size: 24px; font-weight: 700;">Total Pengguna</h2>
                    <h1 class="text-total">{{ $userCount }}</h1>
                </div>
            </div>
            <div class="col-md-3">
                <div class="container-total text-center">
                    <h2 style="font-size: 24px; font-weight: 700;">Total Customer</h2>
                    <h1 class="text-total">{{ $customerCount }}</h1>
                </div>
            </div>
            <div class="col-md-3">
                <div class="container-total text-center">
                    <h2 style="font-size: 24px; font-weight: 700;">Total Vendor</h2>
                    <h1 class="text-total">{{ $vendorCount }}</h1>
                </div>
            </div>
            <div class="col-md-3">
                <div class="container-total text-center">
                    <h2 style="font-size: 24px; font-weight: 700;">Total Layanan</h2>
                    <h1 class="text-total">{{ $serviceCount }}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content-total">
        <div class="row">
            <div class="col-md-3">
                <div class="content-tabel">
                    <div class="row">
                        <div class="col">
                            <h2 style="font-size: 24px; font-weight: 700;">Verifikasi Pengguna</h2>
                        </div>
                        <div class="col text-end">
                            <a href="#" style="color: #068113; text-decoration: none;">View All</a>
                        </div>
                    </div>
                    <table class="table mt-1">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Jenis Pengguna</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Data 1</td>
                                <td>Data 2</td>
                                <td>Data 3</td>
                            </tr>
                            <tr>
                                <td>Data 4</td>
                                <td>Data 5</td>
                                <td>Data 6</td>
                            </tr>
                            <tr>
                                <td>Data 7</td>
                                <td>Data 8</td>
                                <td>Data 9</td>
                            </tr>
                            <tr>
                                <td>Data 10</td>
                                <td>Data 11</td>
                                <td>Data 12</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-3" style="margin-left: 246px;">
                <div class="content-tabel">
                    <div class="row">
                        <div class="col">
                            <h2 style="font-size: 24px; font-weight: 700;">Verifikasi Layanan</h2>
                        </div>
                        <div class="col text-end">
                            <a href="#" style="color: #068113; text-decoration: none;">View All</a>
                        </div>
                    </div>
                    <table class="table mt-1">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Jenis Layanan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Data 1</td>
                                <td>Data 2</td>
                                <td>Data 3</td>
                            </tr>
                            <tr>
                                <td>Data 4</td>
                                <td>Data 5</td>
                                <td>Data 6</td>
                            </tr>
                            <tr>
                                <td>Data 7</td>
                                <td>Data 8</td>
                                <td>Data 9</td>
                            </tr>
                            <tr>
                                <td>Data 10</td>
                                <td>Data 11</td>
                                <td>Data 12</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection