<?php 
require 'Function.php';

if( isset($_POST["submit"])) {

  if( tambah($_POST) > 0 ) {
    echo "
      <scrip> 
        alert('data berhasil ditambahkan!');
        document.location,href = 'index.php';
      </scrip>  
    "; 
  } else {
    echo "
      <scrip>
        alert('data gagal ditambahkan!');
        document.location,href = 'index.php';
      </scrip>"; 
    
  }
}
?>

<!DOCTYPE html>
<head>
  <title>Tambah Data Mahasiswa</title>
</head>
<body>
  <h1>Tambah data mahasiswa</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <ul>
      <li>
        <label for="nim">NIM : </label>
        <input type="text" name="nim" id="nim" required>
      </li>
      <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nrp" id="nama">
      </li>
      <li>
        <label for="email">Email : </label>
        <input type="text" name="email" id="email">
      </li>
      <li>
        <label for="jurusan">Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan">
      </li>
      <li>
        <label for="gambar">Gambar : </label>
        <input type="file" name="gambar" id="gambar">
      </li>
        <button type="submit" name="submit">Tambah</button>
      </li>
    </ul>

  </form>
  
</body>
</html>