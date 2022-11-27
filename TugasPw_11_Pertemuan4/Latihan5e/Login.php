<?php 
if(isset($_POST["submit"])){
  if($_POST["username"] == "admin" && $_POST["password"] == "123") {
    header("Location: admin.php");
        exit;
      } else {
        $eror = true;
    }  
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
  height: 350px;
  top: 200px;
  left: 450px;
  background-color: #D8D9CF;
  text-align: center;
}

.container h1 {
  font-size: 40px;
  font-weight: bold;
  line-height: 20px;
  top: 50px;
  text-align: center;
}

.header {
  position: absolute;
  width: 590px;
  height: 240px;
  top: 50px;
  margin: 30px;
  background-color: whitesmoke;
  
}
  </style>
</head>
<body>
<div class="container">
<h1>Login</h1>
<div class="header">
<ul>
<form action="" method="POST">
    <br>
      <label for="username">Username :</label>
      <input type="text" name="username" id="username">
    </br>
    <br>
      <label for="password">Password :</label>
      <input type="password" name="password" id="password">
    </br>
    <br>

    <?php if (isset ($eror)) : ?>
  <p style="color: red; font-style:italic; ">Username / Password Anda Salah!</p>
  <?php endif; ?>
 
    <button style="color: white;  font-weight:bold; background-color:blue;  border: 1px solid blue; position:relative; top: 30px; " type="submit" name="submit" >Log In</button>
    </br>
    </form>
  </ul>
</div>
</div>
</body>
</html>