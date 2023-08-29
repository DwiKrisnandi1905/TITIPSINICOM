<nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-2 border-bottom">
    <div class="container">
        <div class="title-container">
            <img src="{{ asset('/img/logo1.png') }}" class="img-title">
            <div class="titles">
                <p
                    style="font-family: Poppins; font-size: 10.055px; font-style: normal; font-weight: 700; line-height: normal; color: #068113">
                    Titipsini</p>
                <div class="circle"></div>
                <p
                    style="font-family: Poppins; font-size: 10.055px; font-style: normal; font-weight: 700; line-height: normal; color: #068113">
                    Com</p>
            </div>
            <p class="subtitle">Tempat yang aman untuk barang berharga Anda</p>
        </div>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto" style="display: inline-flex; align-items: flex-start; gap: 52px;">
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
            </div>
        </div>
    </div>
</nav>
