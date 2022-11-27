<?php 

$Asean = [
  "Indonesia" => "D.K.I. Jakarta",
  "Singapura" => "Singapura",
  "Malaysia" => "Kuala Lumpur",
  "Brunei" => "Bandar Seri Begawan",
  "Thailand" => "Bangkok",
  "Laos" => "Vientiane",
  "Filipina" => "Manila",
  "Myanmar" => "Naypyidaw",
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Latihan 4c</title>
</head>
<body>
  <h1>Daftar Negara Asean & Ibu Kotanya</h1>
  <?php foreach ($Asean as $a => $b) : ?>
  <li><?= "$a : $b" ?></li>
  <?php endforeach ?>
</body>
</html>