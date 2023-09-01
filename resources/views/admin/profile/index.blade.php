@extends('layouts.admin')
@section('content')
<style>
    .profile-upload {
        text-align: center;
        margin: 20px auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .layout-1 {
        position: relative;
        width: 235px;
        height: 255px;
        border: 2px solid black;
        border-radius: 15%;
        overflow: hidden;
        margin-top: 50px;
        margin-left: 50px;
    }

    .layout-1 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .overlay label {
        color: white;
        font-size: 42px;
        cursor: pointer;
        width: 700px;
        height: 700px;
        margin-top: 400px;
    }

    .profile-image:hover .overlay {
        opacity: 1;
    }

    /* Menghapus tampilan default tombol "Choose File" */
    input[type="file"] {
        display: none;
    }

    /* Gaya khusus untuk label tombol unggah */
    .label-upload {
        color: white;
        padding: 30px 30px;
        border-radius: 20px;
        cursor: pointer;
        font-weight: 700;
    }

    .profile-title {
        font-size: 20px;
        font-weight: bold;
        margin-top: 70px;
        margin-left: -550px;
        color: #000;
        font-family: Raleway;
        font-size: 32px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    /*data user*/
    .profile-info {
        margin-top: 70px;
        margin-left: -83px;
    }

    .profile-info h2 {
        text-align: left;
        color: #000;
        font-family: Poppins;
        font-size: 20px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }

    .form-group {
        margin-bottom: 1px;
    }

    .form-group label {

        color: var(--grey-900, #101828);
        font-family: Raleway;
        font-size: 14px;
        font-style: normal;
        font-weight: 600;
        line-height: 160%;
    }

    .form-group input {
        padding: 2px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        background: var(--grey-gray, #F0F4FD);
        border-color: transparent;
    }

    .profile-picture h1 {
        margin: 30px 170px;
        color: #000;
        font-family: Raleway;
        font-size: 32px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    /*button*/
    .buttonubah {
        display: flex;
        justify-content: center;
        /* Menengahkan secara horizontal */
        align-items: center;
        padding: 20px;

    }

    .ubah-button {
        padding: 3px 80px;
        background-color: #299935;
        /* Warna latar belakang */
        color: #fff;
        /* Warna teks */
        border: none;
        border-radius: 10px;
        cursor: pointer;
        font-size: 16px;

    }

    /* Gaya saat tombol dihover */
    .ubah-button:hover {
        background-color: #0056b3;
        /* Warna latar belakang saat dihover */
    }

    /* Gaya saat tombol aktif (ditekan) */
    .ubah-button:active {
        background-color: #004b9e;
        /* Warna latar belakang saat ditekan */
    }

    .no-border input {
        border: none;
    }

    .form-control1 {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        background-color: transparent;
    }
</style>
<div class="container-profile">
    <div class="row">
        <div class="col-md-6">
            <div class="profile-picture">
                <!-- Masukkan gambar profil di sini -->
                <h1>Admin Profile</h1>
                <div class="profile-upload">
                    <div class="profile-image layout-1">
                        <img src="{{ asset('/img/Logo.png') }}" alt="Profile Picture">
                        <div class="overlay">
                            <input type="file" id="profile-input" accept="image/*">
                            <label class="label-upload" for="profile-input">upload</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="profile-info">
                <h2>Account ID: 1
                    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
                </h2>
                <div class="form-group no-border">
                    <label for="email">Email</label>
                    <input type="text" class="form-control1" id="email" name="email" value="user@example.com" readonly>
                </div>
                <div class="form-group no-border">
                    <label for="username">Username</label>
                    <input type="text" class="form-control1" id="username" name="username" value="myusername" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama lengkap" name="nama" value="John Doe" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="nama" value="John Doe" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Provinsi</label>
                    <input type="text" class="form-control" id="Provinsi" name="nama" value="John Doe" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Kabupaten/Kota</label>
                    <input type="text" class="form-control" id="kab" name="nama" value="John Doe" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Kecamatan</label>
                    <input type="text" class="form-control" id="Kecamatan" name="nama" value="John Doe" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Kode Pos</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="John Doe" readonly>
                </div>
                <div class="buttonubah">
                    <button class="ubah-button">Ubah</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection