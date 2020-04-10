<?php 
$id = addslashes(trim($_GET['id']));
include 'database/config.php';
$ambil = mysqli_query($koneksi, "SELECT `id`, `clean_url`, `judul`, `isi`, `tanggal` FROM `postingan` WHERE `clean_url` = '$id'");
$judul = "";
foreach ($ambil as $ambil) {
  $judul = $ambil['judul'];
  $tanggal = $ambil['tanggal'];
  $isi = $ambil['isi'];
}
if ( $judul == "") {
  echo "File Not Found";
} 
else{ ?>
  <!DOCTYPE html>
  <html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>

    <!-- my css -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- my font -->
    <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>LP3 Gajah Mada College</title>
    <style>
      body{
        font-size: 17px;
        background: #f2f2f2;
        line-height: 1.7em;
      }
      .judulkonten h2{
        font-size: 32px;
        line-height: 1.5em;
        font-family: roboto;
        text-transform: uppercase;
        font-weight: bold;
      }
      .infopost p{
        margin:0px;
      }
      .container .row{
        border: 1px solid #ccc;
        padding: 20px;
        background: #fff;
      }
    </style>
  </head>
  <body id="home" class="scrollspy">
    <!-- Navbar -->
    <div class="navbar" style="font-family: viga">
      <nav class="navbarku blue darken-3">
        <div class="container">
          <div class="nav-wrapper">
            <a href="../" class="brand-logo"> LP3 GMC </a>
          </div>
          <a href="/" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#about">About Us</a></li>
            <li><a href="#clients">Our Partner</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portofolio</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="../login">Login</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- akhir navbar -->

    <!-- sidenav -->
    <ul class="sidenav" id="mobile-nav">
      <li><a href="#about">About Us</a></li>
      <li><a href="#clients">Our Partner</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#portfolio">Portofolio</a></li>
      <li><a href="#contact">Contact Us</a></li>
    </ul>
    <!-- akhir side nav -->


    <div class="container">
      <nav>
        <div class="nav-wrapper">
          <div class="col s12" style="padding-left: 20px;margin-top: 20px">
            <a href="../" class="breadcrumb">Home</a>
            <a href="../" class="breadcrumb">Posts</a>
            <a href="#!" class="breadcrumb"><?= $judul ?></a>
          </div>
        </div>
      </nav>

      <div class="row">
        <div class="col m12 white lighten-5">
          <div class="judulkonten">
            <h2><?= $judul ?></h2>
          </div>
          <div class="infopost">
            <p>   <i class="tiny material-icons">person</i> Admin - <i class="tiny material-icons">date_range</i> <?= $tanggal ?></p>
          </div>
          <div class="isipost">
            <p><?= $isi ?></p>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <footer class="blue darken-3 grey-text center">
      <p>Gajah Mada College. Copyright 2019</p>
    </footer>

    <!--JavaScript at end of body for optimized loading-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
    <script>
      const sideNav = document.querySelectorAll('.sidenav');
      M.Sidenav.init(sideNav);

      const slider = document.querySelectorAll('.slider');
      M.Slider.init(slider, {
        indicators: false,
        height: 500,
        transition: 600,
        interval: 3000

      });
      const parallax = document.querySelectorAll('.parallax');
      M.Parallax.init(parallax);

      const materialbox = document.querySelectorAll('.materialboxed');
      M.Materialbox.init(materialbox);

      const scroll = document.querySelectorAll('.scrollspy');
      M.ScrollSpy.init(scroll, {
        scrollOffset: 50
      });
    </script>

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e8708d269e9320caabfdd1e/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

  </body>
  </html>
  <?php } ?>