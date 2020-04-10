<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$pesan = $_POST['pesan'];
$email = $_POST['email'];
$nama = $_POST['name'];
$judulnya = $_POST['judul'];
$phone = $_POST['phone'];

//Load composer's autoloader
require './PHPMailer/Exception.php';
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';

$mail = new PHPMailer(true);                      // Passing `true` enables exceptions
try {
    //Server settings
    $mail->isSMTP();                              // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                       // Enable SMTP authentication
    $mail->Username = 'gmadacollege@gmail.com';   // SMTP username
    $mail->Password = 'pengguna';                 // SMTP password
    $mail->SMTPSecure = 'tls';                    // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                            // TCP port to connect to   

    //Recipients
    $mail->setFrom('gmadacollege@gmail.com', 'Pesan Dari Web');
    $mail->addAddress('gajahmadacollege21@gmail.com');     // Add a recipient

    //Content
    $mail->Subject = "$judulnya - Pesan Dari Website Utama";
    $mail->isHTML(true);
    $mail->Body    .= "<p>Ini adalah sebuah email yang dikirim langsung dari form contact pada website utama <b>LP3 GMC</b> <p>";
    $mail->Body    .= "<hr>";
    $mail->Body    .= "<p>Pesan ini dikirim oleh : <p>";
    $mail->Body    .= "<p>Nama  : $nama</p>";
    $mail->Body    .= "<p>No Hp : $phone</p>";
    $mail->Body    .= "<p>Email : $email</p>";
    $mail->Body    .= "<hr>";
    $mail->Body    .= "<p>Pesan : $pesan</p>";
    $mail->Body    .= "<hr>";


    $mail->send();
    if ($mail->send()) {
        setcookie("pesan", "sukses");
        header("location:index.php");
    }else{
        echo "gagal ya";
        die();
    }
} catch (Exception $e) {
    setcookie("pesan", "gagal");
    header("location:index.php");
}