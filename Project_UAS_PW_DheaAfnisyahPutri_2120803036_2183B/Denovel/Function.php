<?php 

$conn = mysqli_connect("localhost", "root", "", "de'novel");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data) {
	global $conn;

	$Judul = htmlspecialchars($data["Judul"]);
	$Penulis = htmlspecialchars($data["Penulis"]);
	$Genre = htmlspecialchars($data["Genre"]);
  $Series = htmlspecialchars($data["Series"]);
  $Volume = htmlspecialchars($data["Volume"]);

	
	$gambar = upload();
	if( !$gambar ) {
		return false;
	}

	$query = "INSERT INTO novel
				VALUES
			  ('', '$Judul', '$Penulis', '$Genre', '$Series', '$Volume', '$gambar')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function upload() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	
	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}


	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
		return false;
	}

	if( $ukuranFile > 1000000 ) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
		return false;
	}

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

	return $namaFileBaru;
}




function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM novel WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data) {
	global $conn;

	$id = $data["id"];
	$Judul = htmlspecialchars($data["Judul"]);
	$Penulis = htmlspecialchars($data["Penulis"]);
	$Genre = htmlspecialchars($data["Genre"]);
	$Series = htmlspecialchars($data["Series"]);
  $Volume = htmlspecialchars($data["Volume"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);
	
	if( $_FILES['gambar']['error'] === 4 ) {
		$gambar = $gambarLama;
	} else {
		$gambar = upload();
	}
	
	

	$query = "UPDATE novel SET
				Judul = '$Judul',
				Penulis = '$Penulis',
				Genre = '$Genre',
				Series = '$Series',
        Volume = '$Volume',
				gambar = '$gambar'
			  WHERE id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}


function cari($keyword) {
	$query = "SELECT * FROM novel
				WHERE
			  Judul LIKE '%$keyword%' OR
			  Penulis LIKE '%$keyword%' OR
			  Genre LIKE '%$keyword%' OR
			  Series LIKE '%$keyword%' OR
        Volume LIKE '%$keyword%'
			";
	return query($query);
}



function register($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	$result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
	if ( mysqli_fetch_assoc($result)) {
		echo "<script>
		alert('Username telah terdaftar!')
		</script>";
		return false;
	}

	if ($password !== $password2) {
		echo "<script>
		alert('Konfirmasi password tidak sesuai!')
		</script>";

		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);

	mysqli_query($conn, "INSERT INTO users VALUES(' ', '$username', '$password')");

	return mysqli_affected_rows($conn);


	function Pinjam($data) {
		global $conn;

		$nama = htmlspecialchars($data["nama"]);
		$email = htmlspecialchars($data["email"]);
		$nomor = htmlspecialchars($data["nomor"]);
		$judul = htmlspecialchars($data["judul"]);
		$date = htmlspecialchars($data["date"]);
	  $waktu = htmlspecialchars($data["waktu"]);
	
		$query = "INSERT INTO pinjam VALUES(' ', '$nama', '$email', '$nomor', '$judul', '$date', '$waktu'";

		mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
		
	}

}
?>