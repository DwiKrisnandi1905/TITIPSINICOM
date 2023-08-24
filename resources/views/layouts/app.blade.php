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
    <title>@yield('title', 'Online Store')</title>
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
                    <a class="nav-link active" style="color: #000; font-family: Raleway; font-size: 18px; font-style: normal; font-weight: 500; line-height: normal;" href="/">Beranda</a>
                    <a class="nav-link active" style="color: #000; font-family: Raleway; font-size: 18px; font-style: normal; font-weight: 500; line-height: normal;" href="/about">Tentang</a>
                    <a class="nav-link active" style="color: #000; font-family: Raleway; font-size: 18px; font-style: normal; font-weight: 500; line-height: normal;" href="#">Layanan</a>
                    <a class="nav-link active" style="color: #000; font-family: Raleway; font-size: 18px; font-style: normal; font-weight: 500; line-height: normal;" href="#">FAQ</a>
                    <a href="#"><img src="{{ asset('/img/User_fill.png') }}" class="user-login"></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- header -->

    <div class="container my-5">
        @yield('content')
    </div>

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
                        <li><a href="#">Syarat & Ketentuan</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul class="list-unstyled nav-links">
                        <li><a href="#" style="font-family: Poppins; font-size: 18px; font-style: normal; font-weight: 500; line-height: normal; color: #fff">Perusahaan</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Kontak Kami</a></li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul class="list-unstyled nav-links">
                        <div class="row">
                            <li>
                                <i class="bi bi-facebook"></i>
                                <a href="#">Facebook</a>
                            </li>
                        </div>
                        <div class="row">
                            <li><a href="#">Twitter</a></li>   
                        </div>
                        <div class="row">
                            <li><a href="#">Instagram</a></li>
                        </div>
                    </ul>
                </div>
                <div class="col-md text-md-center">
                    <ul class="social list-unstyled">
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                        <li><a href="#"><span class="icon-pinterest"></span></a></li>
                        <li><a href="#"><span class="icon-dribbble"></span></a></li>
                    </ul>
                    <p class=""><a href="#" class="btn btn-tertiary">Contact Us</a></p>
                </div>
            </div>
        </div>

    </footer>
    <!-- footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"> </script>
</body>

</html>