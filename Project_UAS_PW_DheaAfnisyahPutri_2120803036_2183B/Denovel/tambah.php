<?php 
require 'Function.php';

if( isset($_POST["submit"])) {

  if( tambah($_POST) > 0 ) {
    echo "
    <script>
        alert('data berhasil ditambahkan!');
        document.location,href = 'Admin.php';
      </script>
    "; 
  } else {
    echo "
      <script>
        alert('data gagal ditambahkan!');
        document.location,href = 'Admin.php';
      </script>"; 
    
  }
}
?>

<!DOCTYPE html>
<head>
  <title>Tambah Data Novel</title>
  <link rel="stylesheet" href="tambah.css">
</head>
<body><div>
<div class="top-bar"></div>
<div class="container">
<div class="Tambah Data">
<form action="" method="post" enctype="multipart/form-data">
<h1>Tambah Data Novel</h1>
<hr>
<label for="Judul">Judul : </label>
<input type="text" name="Judul" id="Judul" required>

<label for="Penulis">Penulis : </label>
<input type="text" name="Penulis" id="Penulis" required>

<label for="Genre">Genre : </label>
<input type="text" name="Genre" id="Genre" required>

<label for="Series">Series : </label>
<input type="text" name="Series" id="Series" required>

<label for="Volume">Volume : </label>
<input type="text" name="Volume" id="Volume" required>

<label for="gambar">Gambar : </label>
<input type="file" name="gambar" id="gambar" >

<button type="submit" name="submit">Confirm</button>
<br>
<button type="submit" name="submit"><a href="Admin.php" style="text-decoration: none; color:aliceblue">Cancle</a></button>
</div>

  </form>
  </div>
</body>
</html>