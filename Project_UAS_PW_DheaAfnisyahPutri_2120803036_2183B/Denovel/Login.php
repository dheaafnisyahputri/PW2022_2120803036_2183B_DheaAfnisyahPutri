<?php 

require 'Function.php';

if(isset($_POST["Login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

  if(mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row["password"])) {
      header("Location: Profile_Novel.php");
      exit;
    }
  }

  $eror = true;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
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
</head>
<body>
<div class="container">
<h1>Login</h1>
<div class="header">
<ul>
<form action="Profile_Novel.php" method="POST">
    <br>
      <label for="username">Username :</label>
      <input type="text" name="username" id="username" required>
    </br>
    <br>
      <label for="password">Password :</label>
      <input type="password" name="password" id="password" required>
    </br> 
    <br>

    <?php if (isset ($eror)) : ?>
  <p style="color: red; font-style:italic; ">Username / Password Anda Salah!</p>
  <?php endif; ?>
 
    <button style="color: white;  font-weight:bold; background-color: #EE6983; padding:5px; border: 1px solid #850E35; position:relative; top: 30px; border-radius: 10px;" type="submit" name="submit" >Log In</button>
    </br><br>
    <br>
    <p style="font-style:italic;">Belum punya akun?<a href="register.php">Daftar disini!</a></p>
    </form>
  </ul>
</div>
</div>
</body>
</html>