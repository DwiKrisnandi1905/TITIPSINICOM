<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <link rel="icon" href="{{ asset('/img/logo1.png') }}" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap">
    <link rel="icon" href="{{ asset('/img/logo1.png') }}" type="image/png">
    <title>{{ $title }}</title>
    <style>
        .container-login {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            min-height: 100vh;
            background-color: #fff;
            font-family: 'Raleway', sans-serif;
        }

        .container-login img {
            width: 500px;
            height: 430px;
            position: relative;
            top: 45px;
            left: 50px;
        }

        .card {
            width: 350px;
            height: 450px;
            padding: 50px 40px 30px 40px;
            background-color: white;
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
            margin-top: 130px;
            margin-right: 250px;
        }

        .card-headerr {
            background-color: #fff;
            text-align: start;
            margin-bottom: 20px;
        }

        .card-headerr h1 {
            font-weight: 700;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            text-align: start;
            font-size: 14px;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            font-size: 12px;
            background: var(--grey-gray, #F0F4FD);
        }

        .form-button {
            width: 100%;
            padding: 10px;
            background-color: #068113;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 25px;
        }

        .form-button:hover {
            background-color: #0056b3;
        }

        #password-toggle {
            position: absolute;
            top: 52%;
            right: 50px;
            transform: translateY(-50%);
            cursor: pointer;
            width: 20px;
            height: 20px;
            background-image: url('/img/open.png');
            background-position: 0 0;
            color: #98A2B3;
        }

        #password-toggle.cross {
            background-position: -20px 0;
            /* Mengatur posisi sprite (silang) */
        }
    </style>
</head>

<body>
    <!-- header -->
    @include('components.admin.auth.navbar')
    <!-- header -->

    <div class="container-login">
        <img src="{{ asset('img/loginimage.png') }}" alt="Gambarimage">
        <div class="card">
            @if (session()->has('login-failed'))
                <div class="alert alert-danger">{{ session()->get('login-failed') }}</div>
            @endif
            <div class="card-headerr">
                <h1>Login Admin</h1>
            </div>
            <form action="{{ route('admin.login.authenticate') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email"
                        class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                        placeholder="Masukkan Email" required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">
                        Kata Sandi:
                        <i id="password-toggle" class="bi bi-eye"></i>
                    </label>
                    <input type="password" id="password" name="password"
                        class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Kata Sandi"
                        required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="form-button">Masuk</button>
            </form>
        </div>
    </div>

    <script>
        const passwordInput = document.getElementById('password');
        const passwordToggle = document.getElementById('password-toggle');

        let passwordVisible = false;

        passwordToggle.addEventListener('click', function() {
            passwordVisible = !passwordVisible;
            passwordInput.type = passwordVisible ? 'text' : 'password';
            passwordToggle.classList.toggle('bi-eye', passwordVisible);
            passwordToggle.classList.toggle('bi-eye-slash', !passwordVisible);
        });
    </script>
</body>

</html>
