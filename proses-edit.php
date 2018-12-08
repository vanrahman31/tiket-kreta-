<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari form tiket
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	
	$harga = $_POST['harga'];
	$tanggal = $_POST['tanggal'];
	
	// buat query update
	$sql = "UPDATE tiket SET nama='$nama', alamat='$alamat', harga='$harga', tanggal='$tanggal' WHERE id=$id";
	$query = mysqli_query($db, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-tiket.php
		header('Location: index.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
