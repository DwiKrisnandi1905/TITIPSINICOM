@extends('admin.dashboard')
@section('content')

<div class="container mt-5 notif">
    <div class="col md-3">
        <a class="nav-link active" href="/admin/dashboard" style="color: black; margin-left: 28px;">
            <i class="bi bi-arrow-left"></i>
        </a>
    </div>
    <div class="row">
        <div class="col">
            <h2 style="margin-left: 28px; font-weight: 700;">Notification</h2>
        </div>
        <div class="col">
            <p style="float: right; margin-top: 14px; margin-right: -80px; color: #068113;">Baca semua</p>
        </div>
    </div>
</div>

<div class="container notif-list mt-3 ms-4">
    <div class="d-grid gap-3" style="width: 106%;">
        <div class="p-2 bg-light border" style="position: relative;">
            <h5>Customer Butuh Verifikasi</h5>
            <p>Verifikasi customer baru yukk.</p>
            <button class="delete-icon" aria-label="Delete">
                <i class="bi bi-trash-fill" style="font-size: 28px;"></i>
            </button>
        </div>
        <div class="p-2 bg-light border" style="position: relative;">
            <h5>Vendor Butuh Verifikasi</h5>
            <p>Verifikasi customer baru yukk.</p>
            <button class="delete-icon" aria-label="Delete">
                <i class="bi bi-trash-fill" style="font-size: 28px;"></i>
            </button>
        </div>
        <div class="p-2 bg-light border" style="position: relative;">
            <h5>Customer Butuh Verifikasi</h5>
            <p>Verifikasi customer baru yukk.</p>
            <button class="delete-icon" aria-label="Delete">
                <i class="bi bi-trash-fill" style="font-size: 28px;"></i>
            </button>
        </div>
    </div>
</div>






@endsection