<?php 
$id = $_GET['id'];
include '../../../database/config.php';
 
session_start();
 
if($_SESSION['status'] !="Login"){
  header("location:../../login/index.php");
}

$selectfoto = mysqli_query($koneksi, "SELECT * FROM `gallery` WHERE `id` = '$id'");

if (0 == mysqli_num_rows($selectfoto)) {
	header("location:../index.php?hapus=gagal");
}
else{
	foreach ($selectfoto as $selectfoto) {
		$namafile = $selectfoto['gambar'];
	}
	$file = "../../../assets/img/portfolio/$namafile";
	unlink($file) or die("Couldn't delete file");
	$hapus = mysqli_query($koneksi, "DELETE FROM `gallery` WHERE `id` = '$id'");
	if ($hapus) {
		header("location:../index.php?hapus=sukses");
	}
	else{
		header("location:../index.php?hapus=gagal");
	}
	
}
?>