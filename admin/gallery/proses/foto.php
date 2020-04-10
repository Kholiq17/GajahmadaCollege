ini_set('upload_max_filesize', '10M');
ini_set('post_max_size', '10M');
ini_set('max_input_time', 600);
ini_set('max_execution_time', 600);
<?php 
include '../../../database/config.php';
 
session_start();
 
if($_SESSION['status'] !="Login"){
  header("location:../../login/index.php");
}

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$fotobaru = substr(str_shuffle($permitted_chars), 0, 16).".jpg";

// Set path folder tempat menyimpan fotonya
$path = "../../../assets/img/portfolio/".$fotobaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO `gallery`(`id`, `gambar`) VALUES (NULL,'$fotobaru')";
  $updatefoto = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($updatefoto){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location:../index.php?foto=sukses"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    header("location:../index.php?foto=gagal2");
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  header("location:../index.php?foto=gagal1");
}