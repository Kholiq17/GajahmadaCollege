<?php 
include '../../../database/config.php';
session_start();
 
if($_SESSION['status'] !="Login"){
	header("location:../../login/index.php");
}

if (isset($_POST['judul'])) {
	$judul = $_POST['judul'];
	$content = $_POST['content'];
	$date = date("Y-m-d");
	$clean = $stringedit =  str_replace(" ", "-", $judul);

	$query = "INSERT INTO `postingan`(`id`, `clean_url`, `judul`, `isi`, `tanggal`) VALUES (NULL,'$clean','$judul','$content','$date')";

	$masuk = mysqli_query($koneksi, $query);
	if ($masuk) {
		header("location:../index.php?tambah=sukses");
	}else{
		header("location:../index.php?tambah=gagal");
	}
}
else{
	header("location:../tambahpost");
}
 ?>
