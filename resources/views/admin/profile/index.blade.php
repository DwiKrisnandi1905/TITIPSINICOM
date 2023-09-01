@extends('admin.dashboard')
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
            margin-top: 70px;
            margin-left: -550px;
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
    </style>
    <div class="profile-upload">
        <div class="profile-title">Profil Pengguna</div>
        <div class="profile-image layout-1">
            <img src="{{ asset('/img/Logo.png') }}" alt="Profile Picture">
            <div class="overlay">
                <input type="file" id="profile-input" accept="image/*">
                <label class="label-upload" for="profile-input">upload</label>
            </div>
        </div>
    </div>
@endsection
