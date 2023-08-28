<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
  <link rel="icon" href="{{ asset('/img/logo1.png') }}" type="image/png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap">
  <link rel="icon" href="{{ asset('/img/logo1.png') }}" type="image/png">
  <title>Login Admin</title>
  <style>
    .container-login {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      min-height: 100vh;
      background-color: #fff;
      font-family: 'Raleway', sans-serif;
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
    }

    #password-toggle.cross {
      background-position: -20px 0;
      /* Mengatur posisi sprite (silang) */
    }
  </style>
</head>

<body>
  <!-- header -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-2 border-bottom">
    <div class="container">
      <div class="title-container">
        <img src="{{ asset('/img/logo1.png') }}" class="img-title">
        <div class="titles">
          <p style="font-family: Poppins; font-size: 10.055px; font-style: normal; font-weight: 700; line-height: normal; color: #068113">
            Titipsini</p>
          <div class="circle"></div>
          <p style="font-family: Poppins; font-size: 10.055px; font-style: normal; font-weight: 700; line-height: normal; color: #068113">
            Com</p>
        </div>
        <p class="subtitle">Tempat yang aman untuk barang berharga Anda</p>
      </div>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto" style="display: inline-flex; align-items: flex-start; gap: 52px;">
          <li class="nav-item {{ Request::is('/') ? 'active-page' : '' }}">
            <a class="navigasi" href="/">Beranda</a>
          </li>
          <li class="nav-item {{ Request::is('about') ? 'active-page' : '' }}">
            <a class="navigasi" href="/about">Tentang</a>
          </li>
          <li class="nav-item {{ Request::is('service') ? 'active-page' : '' }}">
            <a class="navigasi" href="/service">Layanan</a>
          </li>
          <li class="nav-item {{ Request::is('faq') ? 'active-page' : '' }}">
            <a class="navigasi" href="/faq">FAQ</a>
          </li>
          <li class="nav-item {{ Request::is('/admin/login') ? 'active-page' : '' }}">
            <a class="navigasi" href="/admin/login"><i class="bi bi-person-fill"></i></a>
          </li>
        </div>
      </div>
    </div>
  </nav>
  <!-- header -->

  <div class="container-login">
    <div class="card">
      <div class="card-headerr">
        <h1>Login Admin</h1>
      </div>
      <form>
        <div class="form-group">
          <label for="email" class="form-label">Email:</label>
          <input type="email" id="email" class="form-control" placeholder="Masukkan Email" required>
        </div>
        <div class="form-group">
          <label for="password" class="form-label">
            Kata Sandi:
            <img src="{{ asset('/img/open.png') }}" alt="Tampilkan/Sembunyikan Sandi" id="password-toggle">
          </label>
          <input type="password" id="password" class="form-control" placeholder="Masukkan Kata Sandi" required>
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
      passwordToggle.classList.toggle('cross', passwordVisible);

      if (passwordVisible) {
        passwordToggle.style.backgroundImage = "url('/img/close.png')";
      } else {
        passwordToggle.style.backgroundImage = "url('/img/open.png')";
      }
    });
  </script>
</body>

</html>