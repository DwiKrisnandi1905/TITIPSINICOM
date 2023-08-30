<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar Menu Bootstrap 5</title>
  <!-- Link ke CSS Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS untuk sidebar -->
  <style>
    .sidebar {
      height: 100vh;
      background-color: green;
      font-family: 'Poppins', sans-serif; /* Impor font Poppins */
    }
    .img-title {
      filter: brightness(0) invert(1);
      width: 50px; 
      height: auto;
      display: block;
      margin: 0 auto;
      text-align: center;
    }
    .titles {
        color: var(--grey-50, #FFF);
        font-family: Poppins;
        font-size: 10.055px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        flex-direction: row;
        display: flex;
        margin-left: 38px;
    }
    .circle {
    width: 4px;
    height: 4px;
    background-color: #fff500;
    border-radius: 50%; 
    margin-top: 5px;
    }
    .nav-link.active {
    color: white; 
    }
    .nav-link.active img {
    width: 20px;
    }
    .profile-upload {
        text-align: center;
  margin: 20px auto;
  display: flex;
  flex-direction: column;
  align-items: center;
    }

.profile-image {
  position: relative;
  width: 85px;
  height: 95px;
  border: 2px solid white;
  border-radius: 35%;
  overflow: hidden;
}

<<<<<<< HEAD
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
                <li class="nav-item {{ Request::is('admin/login') ? 'active-page' : '' }}">
                    <a class="navigasi" href="{{ route('admin.login') }}"><i class="bi bi-person-fill"></i></a>
                </li>
            </ul>
=======
.profile-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  opacity: 0;
  transition: opacity 0.3s;
}

.overlay label {
  color: white;
  font-size: 12px;
  cursor: pointer;
}

.profile-image:hover .overlay {
  opacity: 1;
}
/* Menghapus tampilan default tombol "Choose File" */
input[type="file"] {
  display: none;
}

/* Gaya khusus untuk label tombol unggah */
.label-upload {
  color: white;
  padding: 30px 30px;
  border-radius: 20px;
  cursor: pointer;
}
  </style>
  <!-- Impor font Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
  <div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar">
      <div class="pt-3 px-3">
        <img src="{{ asset('/img/logo1.png') }}" class="img-title">
        <div class="titles">
          <p class="logo-text">Titipsini</p>
          <div class="circle"></div>
          <p class="logo-text">Com</p>
>>>>>>> 3a6088e0959acdf8354ec7d8765cb20cbf2ca644
        </div>
        <div class="profile-upload">
      <div class="profile-image">
        <img src="{{ asset('/img/Logo.png') }}" alt="Profile Picture">
        <div class="overlay">
  <input type="file" id="profile-input" accept="image/*">
  <label class="label-upload" for="profile-input">upload</label>
</div>
      </div>
    </div>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
            <img src="{{ asset('/img/dashboard.png') }}" class="logo-image" alt="Logo">
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">
            <img src="{{ asset('/img/user.png') }}" class="logo-image" alt="Logo">
              Profil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">
            <img src="{{ asset('/img/users.png') }}" class="logo-image" alt="Logo">
              Pengguna
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">
            <img src="{{ asset('/img/database.png') }}" class="logo-image" alt="Logo">
              Data
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">
            <img src="{{ asset('/img/shopping-bag.png') }}" class="logo-image" alt="Logo">
              Vendor
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">
            <img src="{{ asset('/img/settings.png') }}" class="logo-image" alt="Logo">
              Pengaturan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">
            <img src="{{ asset('/img/log-out.png') }}" class="logo-image" alt="Logo">
              Keluar
            </a>
          </li>
          <!-- ... daftar menu lainnya ... -->
        </ul>
      </div>
    </div>
    <!-- Konten Utama -->
    <div class="flex-grow-1 p-5">
      <h1>Konten Utama</h1>
      <p>Ini adalah konten utama dari halaman.</p>
    </div>
  </div>

  <!-- Script Bootstrap 5 (diperlukan jQuery dan Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const profileInput = document.getElementById("profile-input");
    const profileImage = document.querySelector(".profile-image img");

    // Mengambil data gambar dari penyimpanan lokal saat halaman dimuat
    const savedImageData = localStorage.getItem("profileImage");
    if (savedImageData) {
      profileImage.src = savedImageData;
    }

    profileInput.addEventListener("change", function (event) {
      const selectedFile = event.target.files[0];

      if (selectedFile) {
        const reader = new FileReader();

        reader.onload = function (e) {
          profileImage.src = e.target.result;

          // Menyimpan data gambar ke penyimpanan lokal
          localStorage.setItem("profileImage", e.target.result);
        };

        reader.readAsDataURL(selectedFile);
      }
    });
  });
</script>


</body>
</html>
