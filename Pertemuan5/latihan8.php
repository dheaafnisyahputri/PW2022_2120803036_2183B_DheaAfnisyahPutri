<?php 
$mahasiswa =
[
  [
    "nama" => "Joni",
    "nim" => "123456",
    "jurusan" => "Sistem Informasi",
    "email" => "@joni.com",
    "gambar" => "gambar1."
  ],
  [
    "nama" => "Budi",
    "nim" => "789101",
    "jurusan" => "Sistem Informasi",
    "email" => "@budi.com",
    "gambar" => "gambar1."
  ]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
      <li>
        <img src="">
      </li>
      <li>Nama : <?= $mhs["nama"]; ?></li>
      <li>Nim : <?= $mhs["nim"]; ?></li>
      <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
      <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>