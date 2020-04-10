<?php
include '../templates/ceklogin.php';
$username = $_SESSION['username'];
$passlama = addslashes(trim(md5($_POST['passwordlama'])));
$passbaru = addslashes(trim(md5($_POST['passwordbaru'])));
$repass = addslashes(trim(md5($_POST['repasswordbaru'])));

if ($passbaru == $repass) {
	$cek = mysqli_query($koneksi, "SELECT * FROM `user` WHERE `password` = '$passlama'");
	if (0 == mysqli_num_rows($cek)) {
		header("location:index.php?update=gagal2");
	}
	else{
		$update = mysqli_query($koneksi, "UPDATE `user` SET `password`='$passbaru' WHERE `username` = '$username'");
		if ($update) {
			header("location:index.php?update=sukses");
		}
		else{
			header("location:index.php?update=gagal3");
		}
	}
}
else{
	header("location:index.php?update=gagal1");
}

?>