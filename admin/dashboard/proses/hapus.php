<?php 
	include '../../../database/config.php';
	session_start();
	 
	if($_SESSION['status'] !="Login"){
		header("location:../../login/index.php");
	}
	else{
		$id = $_GET['id'];
		$query = "DELETE FROM `postingan` WHERE `id` = '$id'";
		$hapus = mysqli_query($koneksi, $query);
		if ($hapus) {
			header("location:../index.php?hapus=sukses");
		}
		else{
			header("location:../index.php?hapus=gagal");
		}
	}
 ?>