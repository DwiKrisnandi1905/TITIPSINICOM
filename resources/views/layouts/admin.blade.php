<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
    <link rel="icon" href="{{ asset('/img/logo1.png') }}" type="image/png">
    <title>{{ $title }}</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
    .col-md-9 {
        position: fixed;
        top: 0;
        left: 180px;
        bottom: 0;
    }
</style>

<body>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                @include('components.admin.sidebar')
            </div>
            <div class="topbar">
                <span class="notification-icon">
                    <a class="nav-link active" href="/admin/notification" style="color: black">
                        <i class="bi bi-bell"></i>
                    </a>
                </span>
            </div>
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        // Logout Button
        $('.logout-button').click(function(event) {
            var form = $(this).closest("form");
            event.preventDefault();

            Swal.fire({
                title: 'Keluar?',
                text: "Anda akan dikembalikan ke halaman login!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#008000',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, keluar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit()
                }
            })
        });
    </script>
</body>

</html>
