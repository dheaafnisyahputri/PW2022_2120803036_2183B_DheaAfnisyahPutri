<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Masukkan Angka<?php echo $angka; ?></title>
</head>
<body>
  <form action="Latihan5d_1.php?angka=" method="POST">
    <label for="name">Masukkan Angka : </label>
    <input type="text" name="angka" id="nama">
    <button type="submit" name="submit">Tampilkan!</button>
  </form>
</body>
</html>

<?php 
$angka = $_POST['angka'];

for ($i=$angka; $i>=1; $i--){
  for ($j=1; $j<=$i; $j++){
   echo " $j ";
  }
  echo "<br>";
}
?>



