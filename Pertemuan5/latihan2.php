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
      <li><?= $mahasiswa[0]; ?></li>
      <li><?= $mahasiswa[1]; ?></li>
      <li><?= $mahasiswa[2]; ?></li>
      <li><?= $mahasiswa[3]; ?></li>
  </ul>
  
</body>
</html>