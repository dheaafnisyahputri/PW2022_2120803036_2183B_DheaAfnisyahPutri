<?php 

$angka = ['76', '56', '79', '88', '74', '97', '39', '48', '57'];

echo "Tampilkan Nilai Array Menggunakan Perulangan While"."<br>";

$i = 0;
while ($i < count($angka)) {
  echo $angka[$i]."<br>";
  $i++;
}

?>