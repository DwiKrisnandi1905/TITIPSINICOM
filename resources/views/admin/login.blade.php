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
    width: 300px;
    padding: 20px;
    background-color: white;
    border: 1px solid black;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    margin-left: 500px;
  }

  .card-header {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .form-group {
    margin-bottom: 15px;
  }

  .form-label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }

  .form-input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .form-button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .form-button:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>
  <div class="card">
    <div class="card-header">Login Admin</div>
    <form>
      <div class="form-group">
        <label for="email" class="form-label">Email:</label>
        <input type="email" id="email" class="form-input" required>
      </div>
      <div class="form-group">
        <label for="password" class="form-label">Password:</label>
        <input type="password" id="password" class="form-input" required>
      </div>
      <button type="submit" class="form-button">Login</button>
    </form>
  </div>
</body>
</html>
