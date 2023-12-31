<footer class="footer-48201">
    <div class="container">
        <div class="row">
            <div class="col-md-4 pr-md-5">
                <div class="titles" style="gap: 2px; margin-left: 100px; margin-top: -80px">
                    <img src="{{ asset('/img/logo-landscape.svg') }}" class="img-titles">
                </div>
            </div>
            <div class="col-md">
                <ul class="list-unstyled nav-links">
                    <li>
                        <p class="footer-title" style="font-family: Poppins; font-size: 18px; font-style: normal; font-weight: 500; line-height: normal; color: #fff">
                            Produk</p>
                    </li>
                    <li><a class="footer-title" href="{{ route('guest.syarat-ketentuan') }}">Syarat & Ketentuan</a></li>
                    <li><a class="footer-title" href="{{ route('guest.privacy-policy') }}">Kebijakan Privasi</a></li>
                    <li><a class="footer-title" href="{{ route('guest.faq') }}">FAQ</a></li>
                </ul>
            </div>
            <div class="col-md">
                <ul class="list-unstyled nav-links">
                    <li>
                        <p class="footer-title" style="font-family: Poppins; font-size: 18px; font-style: normal; font-weight: 500; line-height: normal; color: #fff;">
                            Perusahaan</p>
                    </li>
                    <li><a class="footer-title" href="{{ route('guest.about') }}">Tentang Kami</a></li>
                    <li><a class="footer-title" href="{{ route('guest.contact') }}">Kontak Kami</a></li>
                </ul>
            </div>
            <div class="col-md">
                <ul class="list-unstyled nav-links">
                    <div class="row footer-title">
                        <li>
                            <i class="bi bi-facebook" style="margin-right: 10px;"></i>
                            <a href="#">Facebook</a>
                        </li>
                    </div>
                    <div class="row footer-title">
                        <li>
                            <i class="bi bi-twitter" style="margin-right: 10px;"></i>
                            <a href="#">Twitter</a>
                        </li>
                    </div>
                    <div class="row footer-title">
                        <li>
                            <i class="bi bi-instagram" style="margin-right: 10px;"></i>
                            <a href="#">Instagram</a>
                        </li>
                    </div>
                </ul>
            </div>
            <div class="col-md">
                <a href="#" class="footer-app">
                    <img src="{{ asset('/img/getplay.svg') }}" alt="Google Play" style="width: 150px">
                </a>
                <a href="#" class="footer-app">
                    <img src="{{ asset('/img/getapps.svg') }}" alt="Apple App" style="width: 150px">
                </a>
            </div>
        </div>
    </div>
</footer>