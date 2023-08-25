<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <link rel="icon" href="{{ asset('/img/logo1.png') }}" type="image/png">
    <title>@yield('title', 'Titipsini')</title>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-2 border-bottom">
        <div class="container">
            <div class="title-container">
                <img src="{{ asset('/img/logo1.png') }}" class="img-title">
                <div class="titles">
                    <p style="font-family: Poppins; font-size: 10.055px; font-style: normal; font-weight: 700; line-height: normal; color: #068113">Titipsini</p>
                    <div class="circle"></div>
                    <p style="font-family: Poppins; font-size: 10.055px; font-style: normal; font-weight: 700; line-height: normal; color: #068113">Com</p>
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
                    <li class="nav-item {{ Request::is('#') ? 'active-page' : '' }}">
                        <a class="navigasi" href="#"><i class="bi bi-person-fill"></i></a>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <!-- header -->

    <!-- content -->
    <div class="container my-5 main-content">
        @yield('content')
    </div>
    <!-- content -->

    <!-- footer -->
    <footer class="footer-48201">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pr-md-5">
                    <div class="titles" style="gap: 2px; margin-left: 100px">
                        <img src="{{ asset('/img/logo1.png') }}" class="img-titles">
                        <p style="font-family: Poppins; font-size: 24px; font-style: normal; font-weight: 700; line-height: normal; color: #fff">Titipsini</p>
                        <div class="circle2"></div>
                        <p style="font-family: Poppins; font-size: 24px; font-style: normal; font-weight: 700; line-height: normal; color: #fff">Com</p>
                    </div>
                    <p class="subtitles">Tempat yang aman untuk barang berharga Anda</p>
                </div>
                <div class="col-md">
                    <ul class="list-unstyled nav-links">
                        <li><a href="#" style="font-family: Poppins; font-size: 18px; font-style: normal; font-weight: 500; line-height: normal; color: #fff">Produk</a></li>
                        <li><a href="{{ route('home.syaratketentuan') }}">Syarat & Ketentuan</a></li>
                        <li><a href="/privacypolicy">Kebijakan Privasi</a></li>
                        <li><a href="/faq">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul class="list-unstyled nav-links">
                        <li><a href="#" style="font-family: Poppins; font-size: 18px; font-style: normal; font-weight: 500; line-height: normal; color: #fff;">Perusahaan</a></li>
                        <li><a href="/about">Tentang Kami</a></li>
                        <li><a href="/contact">Kontak Kami</a></li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul class="list-unstyled nav-links">
                        <div class="row">
                            <li>
                                <i class="bi bi-facebook" style="margin-right: 10px;"></i>
                                <a href="#">Facebook</a>
                            </li>
                        </div>
                        <div class="row">
                            <li>
                                <i class="bi bi-twitter" style="margin-right: 10px;"></i>
                                <a href="#">Twitter</a>
                            </li>
                        </div>
                        <div class="row">
                            <li>
                                <i class="bi bi-instagram" style="margin-right: 10px;"></i>
                                <a href="#">Instagram</a>
                            </li>
                        </div>
                    </ul>
                </div>
                <div class="col-md text-md-center">
                    <a href="#">
                        <img src="{{ asset('/img/getplay.png') }}" alt="Google Play"  style="margin-bottom: 20px; margin-left: -70px">
                    </a>
                    <a href="#">
                        <img src="{{ asset('/img/getapps.png') }}" alt="Apple App" style="margin-left: -70px">
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"> </script>
</body>

</html>