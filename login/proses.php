<?php 

include '../database/config.php';

$username = addslashes(trim($_POST['username']));
$password = addslashes(trim(md5($_POST['password'])));

$data = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($data);

if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "Login";
	header("location:../admin/index.php");
}else{
	header("location:./index.php?pesan=gagal");
}