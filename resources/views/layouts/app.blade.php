<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <link rel="icon" href="{{ asset('/img/logo1.png') }}" type="image/png">
    <title>@yield('title', 'Online Store')</title>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4 border-bottom">
        <div class="container">
            <div class="col-md-6 col-lg-6">
                <img src="{{ asset('/img/logo1.png') }}" class="img-title">
                
            </div>
            <!-- <a class="navbar-brand" style="color: #262D33; font-size: 24px; font-family: Raleway; font-weight: 600; word-wrap: break-word; text-decoration: none;" href="/">Titipsini.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            
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
    <div class="container my-4">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"> </script>
</body>

</html>