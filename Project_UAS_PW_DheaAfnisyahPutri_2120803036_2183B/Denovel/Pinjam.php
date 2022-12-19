<?php 
require 'Function.php';
$pinjam = query("SELECT * FROM pinjam");
if (isset($_POST["Pinjam"])) {

  if (Pinjam($_POST) > 0) {
    echo "<script>
    alert('Data berhasil di input! Silakan Membaca!');
    </script>";
  } else {
    echo mysqli_error($conn);
  }
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Pinjam novel</title>
	<link rel="stylesheet" href="Pinjam.css">
</head>
<body><div>
<div class="top-bar"></div>
<div class="container">
<div class="login">
<form action="Profile_Novel.php" method="post" enctype="multipart/form-data">
<h1>Form Pinjam Novel</h1>
<hr>
<label for="nama">Nama Lengkap : </label>
<input type="text" name="nama" id="nama" required>

<label for="email">Email :</label>
<input type="text" name="email" id="email" required>

<label for="nomor">No Telpon :</label>
<input type="text" name="nomor" id="nomor" required>

<label for="judul">Judul Novel :</label>
<input type="text" name="judul" id="judul" required>

<label for="date">Tanggal Meminjam :</label>
<input type="date" name="date" id="date" required>

<label for="waktu">Lama Waktu Pinjam :</label>
<input type="text" name="waktu" id="waktu" required>

<button type="submit" name="submit">Confirm</button>
<br>
<button type="submit" name="submit"><a href="Profile_Novel.php" style="text-decoration: none; color:aliceblue">Cancle</a></button>
</div>

	</form>
</div>
</body>
</html>