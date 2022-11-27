<?php 
$mahasiswa = ["Dhea", "2120803036", "Sistem Informasi", "@dheaafnisyahputri.com"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Biodata</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <li><?= $mhs; ?></li>
      <?php endforeach; ?>
  </ul>
  
</body>
</html>