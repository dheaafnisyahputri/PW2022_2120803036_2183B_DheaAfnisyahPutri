<?php 
require 'Function.php';
if (isset($_POST["register"])) {

  if (register($_POST) > 0) {
    echo "<script>
    alert('User baru berhasil ditambahkan!');
    </script>";
  } else {
    echo mysqli_error($conn);
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>
<style>
  .container {
  position: absolute;
  width: 650px;
  height: 400px;
  top: 100px;
  left: 250px;
  background-color: #850E35;
  text-align: center;
  border-radius: 30px;
}

.container h1 {
  font-size: 40px;
  font-weight: bold;
  color: aliceblue;
  line-height: 20px;
  top: 50px;
  text-align: center;
}

.header {
  position: absolute;
  width: 590px;
  height: 300px;
  top: 50px;
  margin: 30px;
  background-color: #FFC4C4;
  border-radius: 20px;
}

</style>
<body>
<div class="container">
  <h1>Registrasi</h1>
  <div class="header">
<ul>
  <form action="" method="POST">
  <br>
      <label for="username">Username :</label>
      <input type="text" name="username" id="username" required>
    </br>
    <br>
      <label for="password">Password :</label>
      <input type="password" name="password" id="password">
    </br>
    <br>
      <label for="password2">Confirm :</label>
      <input type="password" name="password2" id="password2">
    </br>
    <br>
      
    <button style="color: white;  font-weight:bold; background-color: #EE6983; padding:5px; border: 1px solid #850E35; position:relative; top: 30px; border-radius: 10px; "type="submit" name="register">Register</button>
    <br><br>
    <br><p style="font-style:italic;">Registrasi berhasil! Silakan klik <a href="Login.php">Login</a></p>
</form>
</ul>
</div>
</body>
</html>