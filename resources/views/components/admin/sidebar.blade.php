<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="pt-3 px-3">
            <img src="{{ asset('/img/logo1.png') }}" class="img-title">
            <div class="titles">
                <p class="logo-text">Titipsini</p>
                <div class="circle"></div>
                <p class="logo-text">Com</p>
            </div>
            <p class="subtitle">Tempat yang aman untuk barang berharga Anda</p>
            <div class="profile-image layout-2">
            <img src="{{ asset('/img/Logo.png') }}" alt="Profile Picture">
        </div>
    </div>
            <ul class="nav flex-column">
                <li class="nav-item {{ Request::is('admin/home') ? 'active-page' : '' }}">
                    <a class="nav-link active" href="/admin/home">
                        <img src="{{ asset('/img/dashboard1.svg') }}" class="logo-image" alt="Logo">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item {{ Request::is('admin/profile') ? 'active-page' : '' }}">
                    <a class="nav-link active" href="/admin/profile">
                        <img src="{{ asset('/img/user1.svg') }}" class="logo-image" alt="Logo">
                        Profil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <img src="{{ asset('/img/users1.svg') }}" class="logo-image" alt="Logo">
                        Pengguna
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <img src="{{ asset('/img/database1.svg') }}" class="logo-image" alt="Logo">
                        Data
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <img src="{{ asset('/img/shopping-bag1.svg') }}" class="logo-image" alt="Logo">
                        Vendor
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <img src="{{ asset('/img/settings1.svg') }}" class="logo-image" alt="Logo">
                        Pengaturan
                    </a>
                </li>
                <li class="nav-item">
                    <form class="nav-link active logout-button px-2" action="{{ route('admin.logout') }}"
                        method="GET">
                        @csrf
                        <img src="{{ asset('/img/log-out1.svg') }}" class="logo-image" alt="Logo">
                        Keluar
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const profileInput = document.getElementById("profile-input");
        const profileImageLayout1 = document.querySelector(".profile-image.layout-1 img");
        const profileImageLayout2 = document.querySelector(".profile-image.layout-2 img");

        // Mengambil data gambar dari penyimpanan lokal saat halaman dimuat
        const savedImageData = localStorage.getItem("profileImage");
        if (savedImageData) {
            profileImageLayout1.src = savedImageData;
            profileImageLayout2.src = savedImageData;
        }

        profileInput.addEventListener("change", function(event) {
            const selectedFile = event.target.files[0];

            if (selectedFile) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    profileImageLayout1.src = e.target.result;
                    profileImageLayout2.src = e.target.result;

                    localStorage.setItem("profileImage", e.target.result);
                };

                reader.readAsDataURL(selectedFile);
            }
        });
    });
</script>
