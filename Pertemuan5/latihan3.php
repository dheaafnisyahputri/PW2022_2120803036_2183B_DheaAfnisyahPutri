<?php 
$mahasiswa = [
  ["Joni", "12345", "Sistem Informasi", "@joni.com"],
  ["Budi", "67891", "Teknik Informatika", "@budi.com"],
  ["Angga", "11121", "Ilmu Komputer", "@angga.com"],
  ["Rio", "31415", "Teknik Jaringan", "@rio.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Biodata</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach($mahasiswa as $mhs) : ?>
  <ul>
      <li><?= $mhs[0]; ?></li>
      <li><?= $mhs[1]; ?></li>
      <li><?= $mhs[2]; ?></li>
      <li><?= $mhs[3]; ?></li>
  </ul>
  <?php endforeach; ?>

</body>
</html>