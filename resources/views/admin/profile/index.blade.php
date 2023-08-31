@extends('admin.dashboard')
@section('content')
<style> 
  .profile-container {
    background-color: #ffffff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
    width: 117%;
    overflow: auto;
    max-height: 600px;
  }
  .profile-container h1 {
    padding: 60px 30px;
    color: #000;
    font-family: Raleway;
    font-size: 32px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
  }
  .profile-container h2 {
    color: #000;
    font-family: Poppins;
    font-size: 20px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    text-align: center;
    margin-top: -60px;
  }
  .profile-label {
    font-weight: 600;
    display: block;
    margin-bottom: 6px;
    font-size: 12px;
    margin-left: 445px;
  }
  .input-container {
    display: flex;
    flex-direction: column;
    margin-bottom: 10px;
  }
  
  .profile-input {
    width: 35%;
    height: 25px;
    padding: 8px;
    margin: 0px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-left: 445px;
  }
  .submit-button {
    background-color: #299935;
    color: white;
    padding: 5px 50px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    margin-left: 550px;
    color: #FFF;
    font-family: Poppins;
    font-size: 12px;
    font-style: normal;
    font-weight: 600;
  }
</style>
  <div class="profile-container">
    <h1>Admin Profile</h1>
    <div class="input-container">
    <h2><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap">Account ID : 1</h2>
    <label class="profile-label" for="email">Email:</label>
    <input class="profile-input" type="email" id="email" name="email">
    
    <label class="profile-label" for="username">Username:</label>
    <input class="profile-input" type="text" id="username" name="username">
    
    <label class="profile-label" for="fullname">Nama Lengkap:</label>
    <input class="profile-input" type="text" id="fullname" name="fullname">
    
    <label class="profile-label" for="address">Alamat:</label>
    <input class="profile-input" type="text" id="address" name="address">
    
    <label class="profile-label" for="province">Provinsi:</label>
    <input class="profile-input" type="text" id="province" name="province">
    
    <label class="profile-label" for="city">Kota/Kabupaten:</label>
    <input class="profile-input" type="text" id="city" name="city">
    
    <label class="profile-label" for="subdistrict">Kecamatan:</label>
    <input class="profile-input" type="text" id="subdistrict" name="subdistrict">
    
    <label class="profile-label" for="postal">Kode Pos:</label>
    <input class="profile-input" type="text" id="postal" name="postal">
    </div>
    <button class="submit-button">Ubah</button>
  </div>
@endsection
