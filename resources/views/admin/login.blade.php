<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Card</title>
<style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
    background-color: #f0f0f0;
  }

  .card {
    width: 195px;
    padding: 100px;
    background-color: white;
    border: 1px solid black;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
    margin-left: 500px;
  }
  .card-header h1 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 50px;
    margin-left: -40px;
    margin-top: -50px;
  }
  .form-group {
    margin-bottom: 30px;
    margin-left: -40px;
    margin-right: -30px;
  }

  .form-label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    position: relative;
  }
  

    #password-toggle {
    position: absolute;
    top: 220%;
    right: 0px;
    transform: translateY(-50%);
    cursor: pointer;
    width: 20px;
    height: 20px;
    background-image: url('/img/open.png');
    background-position: 0 0;
}
<<<<<<< Updated upstream
=======

    .card-header h1 {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 50px;
      margin-left: -40px;
      margin-top: -50px;
    }

    .form-group {
      margin-bottom: 30px;
      margin-left: -40px;
      margin-right: -30px;
    }

    .form-label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .form-label img {
      position: relative;
    }

    #password-toggle {
      position: absolute;
      top: 335px;
      right: 235px;
      transform: translateY(-50%);
      cursor: pointer;
      width: 20px;
      /* Sesuaikan ukuran gambar */
      height: 20px;
      /* Sesuaikan ukuran gambar */
      background-image: url('/img/open.png');
      /* Menggunakan sprite sebagai gambar latar belakang */
      background-position: 0 0;
      /* Mengatur posisi sprite (mata terbuka) */
    }
>>>>>>> Stashed changes

    #password-toggle.cross {
        background-position: -20px 0; /* Mengatur posisi sprite (silang) */
    }

  .form-input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }


  .form-button {
    width: 282px;
    padding: 10px;
    background-color: #068113;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-left: -40px;

  }

  .form-button:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>
  <div class="card">
    <div class="card-header">
        <h1>Login Admin</h1>
        </div>
    <form>
      <div class="form-group">
        <label for="email" class="form-label">Email:</label>
        <input type="email" id="email" class="form-input" required>
      </div>
      <div class="form-group">
    <label for="password" class="form-label">
        Kata Sandi:
        <img src="{{ asset('/img/open.png') }}" alt="Tampilkan/Sembunyikan Sandi" id="password-toggle">
    </label>
    <input type="password" id="password" class="form-input" required>
</div>

      <button type="submit" class="form-button">Login</button>
    </form>
  </div>
  <script>
    const passwordInput = document.getElementById('password');
    const passwordToggle = document.getElementById('password-toggle');

    let passwordVisible = false;

    passwordToggle.addEventListener('click', function() {
        passwordVisible = !passwordVisible;
        passwordInput.type = passwordVisible ? 'text' : 'password';
        passwordToggle.classList.toggle('cross', passwordVisible);
    });
</script>


</body>
</html>
