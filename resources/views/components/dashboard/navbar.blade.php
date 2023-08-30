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
        </ul>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const profileInput = document.getElementById("profile-input");
        const profileImage = document.querySelector(".profile-image img");

        // Mengambil data gambar dari penyimpanan lokal saat halaman dimuat
        const savedImageData = localStorage.getItem("profileImage");
        if (savedImageData) {
          profileImage.src = savedImageData;
        }

        profileInput.addEventListener("change", function(event) {
          const selectedFile = event.target.files[0];

          if (selectedFile) {
            const reader = new FileReader();

            reader.onload = function(e) {
              profileImage.src = e.target.result;

              // Menyimpan data gambar ke penyimpanan lokal
              localStorage.setItem("profileImage", e.target.result);
            };

            reader.readAsDataURL(selectedFile);
          }
        });
      });
    </script>