<?php 
$dbhost = 'localhost'; 
$dbuser = 'root';     // ini berlaku di xampp
$dbpass = '';         // ini berlaku di xampp
$dbname = 'gajahmada';
// melakukan koneksi ke database
$koneksi = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

// mencek browser
$browser = $_SERVER['HTTP_USER_AGENT'];
$chrome = '/Chrome/';
$firefox = '/Firefox/';
$ie = '/MSIE/';
if (preg_match($chrome, $browser))
    $data = "Chrome/Opera";
if (preg_match($firefox, $browser))
    $data = "Firefox";
if (preg_match($ie, $browser))
    $data = "IE";

$ipaddress = $_SERVER['REMOTE_ADDR']."";
$browser = $data;
$tanggal = date('Y-m-d');
$kunjungan = 1;
// Daftarkan Kedalam Session Lalu Simpan Ke Database
if (!isset($_SESSION['visitor'])){
$_SESSION['visitor']=$ipaddress;
mysqli_query($koneksi, "INSERT INTO visitor (tanggal,ip_address,counter,browser) VALUES ('".$tanggal."','".$ipaddress."','".$kunjungan."','".$browser."')");
}
// Hitung Jumlah Visitor
$sql = mysqli_query($koneksi, 'SELECT sum(counter) as total FROM visitor');

?>