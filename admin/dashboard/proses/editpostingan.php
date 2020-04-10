<?php 
include '../../../database/config.php';
session_start();
 
if($_SESSION['status'] !="Login"){
	header("location:../../login/index.php");
}

if (isset($_POST['judul'])) {
	$id = $_GET['id'];
	$judul = $_POST['judul'];
	$content = $_POST['content'];

	$query = "UPDATE `postingan` SET `judul`='$judul', `isi`='$content' WHERE `id`='$id'";

	$masuk = mysqli_query($koneksi, $query);
	if ($masuk) {
		header("location:../index.php?update=sukses");
	}
}
else{
	header("location:../editpost.php?id=$id");
}
 ?>
