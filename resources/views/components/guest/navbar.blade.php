<nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-2 border-bottom">
    <div class="container">
        <div class="title-container">
            <img src="{{ asset('/img/logo1.png') }}" class="img-title">
            <div class="titles">
                <p class="logo-text" style="color: #068113">Titipsini</p>
                <div class="circle"></div>
                <p class="logo-text" style="color: #068113">Com</p>
            </div>
            <p class="subtitle">Tempat yang aman untuk barang berharga Anda</p>
        </div>

        <button class="navbar-toggler" style="background-color: #068113;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-light"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto" style="display: inline-flex; align-items: flex-start; gap: 30px; padding-top: 10px">
                <li class="nav-item {{ Request::is('/') ? 'active-page' : '' }}">
                    <a class="navigasi" href="{{ route('guest.home') }}">Beranda</a>
                </li>
                <li class="nav-item {{ Request::is('about') ? 'active-page' : '' }}">
                    <a class="navigasi" href="{{ route('guest.about') }}">Tentang</a>
                </li>
                <li class="nav-item {{ Request::is('service') ? 'active-page' : '' }}">
                    <a class="navigasi" href="{{ route('guest.service') }}">Layanan</a>
                </li>
                <li class="nav-item {{ Request::is('faq') ? 'active-page' : '' }}">
                    <a class="navigasi" href="{{ route('guest.faq') }}">FAQ</a>
                </li>
                <li class="nav-item {{ Request::is('/admin/login') ? 'active-page' : '' }}">
                    <a class="navigasi" href="{{ route('admin.login') }}"><i class="bi bi-person-fill"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
