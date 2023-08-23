<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Online Store')</title>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <img src="{{ asset('/img/logo1.png') }}" class="img-title">
            <a class="navbar-brand" style="color: #262D33; font-size: 36px; font-family: Poppins; font-weight: 600; word-wrap: break-word; text-decoration: none;" href="#">Titipsini.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto" style="display: inline-flex; align-items: flex-start; gap: 52px;">
                    <a class="nav-link active" style="color: #000; font-family: Poppins; font-size: 24px; font-style: normal; font-weight: 500; line-height: normal;" href="#">Home</a>
                    <a class="nav-link active" style="color: #000; font-family: Poppins; font-size: 24px; font-style: normal; font-weight: 500; line-height: normal;" href="#">About</a>
                    <a class="nav-link active" style="color: #000; font-family: Poppins; font-size: 24px; font-style: normal; font-weight: 500; line-height: normal;" href="#">Service</a>
                    <a class="nav-link active" style="color: #000; font-family: Poppins; font-size: 24px; font-style: normal; font-weight: 500; line-height: normal;" href="#">Contact Us</a>
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