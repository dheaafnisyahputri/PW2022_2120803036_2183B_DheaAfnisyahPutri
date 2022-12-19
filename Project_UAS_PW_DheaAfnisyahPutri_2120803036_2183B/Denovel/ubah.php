<?php
require 'Function.php';

$id = $_GET["id"];

$novel = query("SELECT * FROM novel WHERE id = $id")[0];

if( isset($_POST["submit"]) ) {
	
	
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'Admin.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'Admin.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data novel</title>
	<link rel="stylesheet" href="ubah.css">
</head>
<body><div>
<div class="top-bar"></div>
<div class="container">
<div class="login">
<form action="" method="post" enctype="multipart/form-data">
<h1>Edit Data Novel</h1>
<hr>
<input type="hidden" name="id" value="<?= $novel["id"]; ?>">
<input type="hidden" name="gambarLama" value="<?= $novel["gambar"]; ?>">
<hr>
<label for="Judul">Judul : </label>
<input type="text" name="Judul" id="Judul" required value="<?= $novel["Judul"]; ?>">

<label for="Penulis">Penulis : </label>
<input type="text" name="Penulis" id="Penulis" value="<?= $novel["Penulis"]; ?>">

<label for="Genre">Genre :</label>
<input type="text" name="Genre" id="Genre" value="<?= $novel["Genre"]; ?>">

<label for="Series">Series :</label>
<input type="text" name="Series" id="Series" value="<?= $novel["Series"]; ?>">

<label for="Volume">Volume :</label>
<input type="text" name="Volume" id="Volume" value="<?= $novel["Volume"]; ?>">

<label for="gambar">Gambar :</label> <br>
<img src="img/<?= $novel['gambar']; ?>" width="40"> <br>
<input type="file" name="gambar" id="gambar">

<button type="submit" name="submit">Edit Data!</button>
<br>
<button type="submit" name="submit"><a href="Admin.php" style="text-decoration: none; color:aliceblue">Cancle</a></button>
</div>

	</form>
</div>
</body>
</html>