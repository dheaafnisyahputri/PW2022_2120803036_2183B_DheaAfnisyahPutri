<?php 
session_start();
require 'Function.php';
$novel = query("SELECT * FROM novel");

if( isset($_POST["cari"]) ) {
	$novel = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" href="Admin.css">
</head>
<body>
<div>
<div class="top-bar">
	<div class="nav">
		<a href="Login.php">Login</a></li>
		<a href="Admin.php">Admin</a></li>
		<a href="Profile_Novel.php">Profile Novel</a></li>
		<a href="Pinjam.php">Pinjam Novel</a></li>
		<a href="Logout.php">Logout</a></li>
	</div>
</div>
<div class="container">

<h1>Kelola Data Novel</h1>

<button style=" background-color: #850E35;  padding:5px;" type="submit" name="submit" ><a href="tambah.php" style="text-decoration:none; color: white; font-weight:bold;">Tambah Data</a></button><br>
<br>

<form action="" method="POST">

	<input type="text" name="keyword" size="40" autofocus placeholder="Inputkan kata kunci" autocomplete="on">
	<button style="background-color: #EE6983;  padding:10px; float:left; left:655px; border-radius: 50px;
	color: white; font-weight:bold; border-color: black;" type="submit" name="cari">Cari</button>
	<br><br>

</form>

<br>
<table>
	<tr style="background-color: #EE6983; font-weight:bold; color:aliceblue">
  <th>No.</th>
  <th>Setting</th>
  <th>Gambar</th>
  <th>Judul</th>
  <th>Penulis</th>
  <th>Genre</th>
  <th>Series</th>
  <th>Volume</th>
	</tr>

  <?php $i = 1; ?>
	<?php foreach( $novel as $row ) : ?>
	<tr>
		<td style="width: 50px;"><?= $i; ?></td>
		<td style="width: 130px;">
			<a href="ubah.php?id=<?= $row["id"]; ?>">Edit</a> |
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
		</td>
		<td style="width: 100px;"><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
		<td style="width: 200px;"><?= $row["Judul"]; ?></td>
    <td style="width: 180px;"><?= $row["Penulis"]; ?></td>
    <td style="width: 150px;"><?= $row["Genre"]; ?></td>
    <td style="width: 80px;"><?= $row["Series"]; ?></td>
    <td style="width: 80px;"><?= $row["Volume"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	
</table>
</div>
</body>
</html>