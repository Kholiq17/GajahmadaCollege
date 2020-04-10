<?php
 include 'database/config.php'; 
$ambilportfolio = mysqli_query($koneksi, "SELECT * FROM `gallery`");


// PAGINATION
$limit = 3;
$result = mysqli_query($koneksi, "SELECT * FROM postingan");
$jumlahdata = mysqli_num_rows($result);
$jumlahhalaman = ceil($jumlahdata / $limit);
// $halamanaktif = (isset($_GET['halaman'])) ? $_GET["halaman"] : 1;
if (isset($_GET['halaman'])) {
  $halamanaktif = (int)$_GET['halaman'];
}
else{
  $halamanaktif = 1;
}

$awaldata = ($jumlahhalaman * $halamanaktif) - $limit;
if ($awaldata < 0) {
  $awaldata = 0;
}
$ambil = mysqli_query($koneksi, "SELECT * FROM postingan LIMIT $awaldata, $limit");

?>
<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="./assets/css/materialize.min.css"  media="screen,projection"/>

  <!-- my css -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- my font -->
  <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">


  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>LP3 Gajah Mada College</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

</head>
<body id="home" class="scrollspy">


  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav class="navbarku">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo"> LP3 GMC </a>
        </div>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#about">About Us</a></li>
          <li><a href="#clients">Our Partner</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portofolio</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li><a href="./login">Login</a></li>
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

  <!-- slider -->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="assets/img/slider/8.jpg">
        <div class="caption left-align">
          <h3>WELCOME TO </h3>
          <h5 class="light text-lighten-3 kiri">LP3 GAJAH MADA COLLEGE GROUP</h5>
        </div>
      </li>
      <li>
        <img src="assets/img/slider/7.JPG">
        <div class="caption right-align gabung">
          <h3 style="color: #ecdc14">MARI BERGABUNG BERSAMA KAMI!</h3>
          <h5 class="light text-lighten-3">Menunjang Masa Depan Yang Lebih Cerah</h5>
        </div>
      </li>
    </ul>
  </div>

  <!-- about Us -->

  <section id="about" class="about scrollspy">
    <div class="container">
      <div class="center logo">
        <a href="https://www.instagram.com/gajahmadacollege/">
          <img src="assets/img/logo/1.png" >
        </a>

      </div>
      <div class="row isi">
        <h3 class="center light white-text text-darken-3">About Us</h3>
        <div class="about col m7 light"
        data-aos="fade-up"
        data-aos-offset="200"
        data-aos-delay="400"
        data-aos-easing="ease"
        data-aos-mirror="true"
        data-aos-once="false">
        <h5>We Are Professionals</h5>
        <p>Lembaga Pendidikan LP3 Gajah Mada College merupakan lembaga yang sudah berpengalaman dalam penyelenggaraan pendidikan dan pelatihan yang diperuntukan bagi masyarakat umum,pelajar,mahasiswa, pekerja dan karyawan baik di instansi pemerintah maupun swasta. Pertama berdiri pada tanggal 4 maret 2001 di Luwuk Banggai, kemudian pada tahun 2006 kami membuka cabang di kota Tojo una-una, serta pada tahun 2009 kamipun kembali mendirikan di kota Poso. Ribuan alumni sudah di luluskan oleh LP3 Gajah Mada Group yang melahirkan banyak anak muda yang mempunyai skill dan berprestasi di bidangnya masing-masing.</p>
      </div>
      <div class="angka col m4 light" style="float: right;"
      data-aos="fade-up"
      data-aos-offset="200"
      data-aos-delay="400"
      data-aos-easing="ease"
      data-aos-mirror="true"
      data-aos-once="false">
      <p>DESAIN GRAFIS</p>

      <div class="progress">
        <div class="determinate blue" style="width: 95%"></div>
      </div>
      <p>TEKNIK KOMPUTER DAN JARINGAN</p>

      <div class="progress">
        <div class="determinate blue" style="width: 85%"></div>
      </div>
      <p>PERHOTELAN DAN PARIWISATA</p>

      <div class="progress">
        <div class="determinate blue" style="width: 90%"></div>
      </div>
      <p>ANIMASI CREATOR</p>

      <div class="progress">
        <div class="determinate blue" style="width: 97%"></div>
      </div>
      <p>KOMPUTER AKUNTANSI</p>

      <div class="progress">
        <div class="determinate blue" style="width: 95%"></div>
      </div>
      <p>KOMPUTER ADMINISTRASI PERKANTORAN</p>

      <div class="progress">
        <div class="determinate blue" style="width: 80%"></div>
      </div>
    </div>

    <div class="about col m7 light"
    data-aos="fade-up"
    data-aos-offset="200"
    data-aos-delay="400"
    data-aos-easing="ease"
    data-aos-mirror="true"
    data-aos-once="false">
    <h5>Sebagai Pusat Tempat Pendidikan Komputer</h5>
    <p>1. Terakreditasi A oleh BAN BNF</p>
    <p>2. Berkinerja A Nasional</p>
    <p>3. LKP Unggulan Nasional</p>
    <p>4. Tempat Uji Kompetensi (TUK-TIK) LSP Telematika</p>
  </div>
</div>
</div>
</div>

</section>

<!-- Info -->
<div id="info"
data-aos="fade-up"
data-aos-offset="200"
data-aos-delay="400"
data-aos-easing="ease"
data-aos-mirror="true"
data-aos-once="false">
<section class="info scrollspy">
  <div class="container">
    <div class="row">
      <h3 class="center light black-text text-darken-3"> <i class="material-icons">bookmark</i> Info</h3>
      <?php
      if (0 != mysqli_num_rows($ambil)) {
        foreach ($ambil as $ambil) {?>
          <div class="col s12 m4">
            <div class="card white lighten-5">
              <div class="card-content dark-text">
                <span class="card-title"><?= $ambil['judul'] ?></span>
                <p><?= substr($ambil['isi'],0,100) ?>...</p>
              </div>
              <div class="card-action">
                <a href="./posts/<?= $ambil['clean_url'] ?>" class="waves-effect waves-light btn"><i class="material-icons right">chevron_right</i>Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        <?php } 
      }
      else {?>
        <h5 class="center light black-text text-darken-3">Tidak Ada Info Tersedia</h5>
      <?php } ?>
    </div>
  <div class="row">
    <ul class="pagination center">
      <?php if ($halamanaktif > 1): ?>
        <li><a href="index.php?halaman=<?= $halamanaktif - 1?>"><i class="material-icons">chevron_left</i></a></li>
      <?php else: ?>
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
      <?php endif ?>

      <?php for ($i=1; $i <= $jumlahhalaman; $i++) { ?>
        <?php if ($i == $halamanaktif): ?>
          <li class="active"><a href="index.php?halaman=<?= $i ?>"><?= $i ?></a></li>
        <?php else: ?>
          <li class="waves-effect"><a href="index.php?halaman=<?= $i ?>"><?= $i ?></a></li>
        <?php endif ?>
      <?php } ?>

      <?php if ($halamanaktif < $jumlahhalaman): ?>
        <li class="waves-effect"><a href="index.php?halaman=<?= $halamanaktif + 1?>"><i class="material-icons">chevron_right</i></a></li>
      <?php else: ?>
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
      <?php endif ?>
      </ul>
    </div>
  </div>

</section>
</div>
<!-- end info -->

<div id="clients" class="parallax-container scrollspy">
  <span><h3 class="center light white-text">Partner Kita</h3></span>
  <div class="parallax"><img src="assets/img/slider/1.png"></div>
  <div class="dalem">

    <div class="container clients ">
      <div class="row">
        <div class="col m4 s12 center"
        data-aos="zoom-in-up"
        data-aos-offset="200"
        data-aos-delay="400"
        data-aos-easing="ease"
        data-aos-mirror="true"
        data-aos-once="false">
        <img src="assets/img/clients/pendidikan.png" >
      </div>
      <div class="col m4 s12 center dinas" 
      data-aos="zoom-in-up"
      data-aos-offset="200"
      data-aos-delay="400"
      data-aos-easing="ease"
      data-aos-mirror="true"
      data-aos-once="false">
      <img src="assets/img/clients/lsp.png">
    </div>
    <div class="col m4 s12 center hipki"
    data-aos="zoom-in-up"
    data-aos-offset="200"
    data-aos-delay="400"
    data-aos-easing="ease"
    data-aos-mirror="true"
    data-aos-once="false">
    <img src="assets/img/clients/hipki.png">
  </div>
</div>
</div>
</div>
</div>

<!-- Services -->
<section id="services" class="services white lighten-3 scrollspy">
  <div class="container">
    <div class="row">
      <h3 class="light center grey-text text-darken-3">Our Services</h3>
      <hr class="garis1">
       <!-- Modal Trigger -->
  

  <!-- Modal Structure -->
  <div id="ac" class="modal">
    <div class="modal-content">
      <h4>Foto Fasilitas Ac</h4>
      <img src="assets/img/layanan/ac.jpeg" alt="">
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-primary">Ok</a>
    </div>
  </div>

  <div id="perpus" class="modal">
    <div class="modal-content">
      <h4>Foto Fasilitas Perpus</h4>
      <img src="assets/img/layanan/perpus.jpeg" alt="">
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-primary">Ok</a>
    </div>
  </div>

  <div id="wifi" class="modal">
    <div class="modal-content">
      <h4>Foto Fasilitas Ac</h4>
      <img src="assets/img/layanan/wifi.jpeg" alt="">
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-primary">Ok</a>
    </div>
  </div>

  <a id="actimbul">
      <div class="col m4 s12" 
      data-aos="zoom-in-up"
      data-aos-offset="200"
      data-aos-delay="400"
      data-aos-easing="ease"
      data-aos-mirror="true"
      data-aos-once="false">
      <div class="card-panel center">
        <i class="material-icons medium">ac_unit</i>
        <h5>Ruangan Full Ac</h5>
        <p>Ruangan Full Ac kami sediakan guna menunjang proses pembelajaran yang lebih baik dan lebih nyaman</p>
      </div>
    </div>
    </a>
<a id="perpustimbul">
    <div class="col m4 s12"
    data-aos="zoom-in-up"
    data-aos-offset="200"
    data-aos-delay="400"
    data-aos-easing="ease"
    data-aos-mirror="true"
    data-aos-once="false">
    <div class="card-panel center">
      <i class="material-icons medium">library_books</i>
      <h5>Perpustakaan</h5>
      <p>Di LP3 Gajah Mada College kami menyediakan ruang perpustakaan yang diharapkan dapat menjadi salah satu pendongkrak minat belajar</p>
    </div>
  </div>
</a>
<a id="wifitimbul">
  <div class="col m4 s12"
  data-aos="zoom-in-up"
  data-aos-offset="200"
  data-aos-delay="400"
  data-aos-easing="ease"
  data-aos-mirror="true"
  data-aos-once="false">
  <div class="card-panel center">
    <i class="material-icons medium">wifi</i>
    <h5>Internet 24 Jam</h5>
    <p>Fasilitas koneksi internet wifi yang bebas digunakan oleh siapa saja yang berada di sekitar lingkungan kampus. </p>
  </div>
</div>
</a>
</div>
</div>
</section>

<!-- portfolio -->
<section id="portfolio" class="portfolio scrollspy">
  <div class="container">
    <h3 class="light center white-text text-darken-3">Portfolio</h3>
    <!-- <hr class="garis1"> -->
    <div class="row">
      <?php foreach ($ambilportfolio as $ambil) {?>
        <div class="col m3 s12 porto">
        <img src="assets/img/portfolio/<?= $ambil['gambar'] ?>" class="responsive-img materialboxed">
      </div>
    <?php } ?>
  </div>
</div>
</section>

<!-- Contact us  -->

<section class="maps">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.262450330122!2d122.78466221475361!3d-0.9564289993023041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d86a12284fdcac9%3A0x1d8bd9cc1f753ba4!2sLP3+Gajah+Mada+College!5e0!3m2!1sid!2sid!4v1565839653618!5m2!1sid!2sid" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe> 
</li>
</section>


<section id="contact" class="contact grey lighten-4 scrollspy">
  <div class="container">
    <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
    <div class="">

    </div>


    <div class="row">
      <div class="col m5 s12"
      data-aos="zoom-in-up"
      data-aos-offset="200"
      data-aos-delay="90"
      data-aos-easing="ease"
      data-aos-mirror="true"
      data-aos-once="false">
      <div class="card-panel blue darken-2 center white-text">
        <i class="material-icons">email</i>
        <h5>Contact</h5>
        <p>Silahkan Menghubungi kami</p>
      </div>
      <ul class="collection with-header">
        <li class="collection-header"><h4>Our Office</h4></li>
        <li class="collection-item">LP3 Gajah Mada College</li>
        <li class="collection-item">JL. Kh. Agus Salim No.88B, Luwuk Banggai</li>
        <li class="collection-item">Central Sulawesi,Indonesia</li>
      </ul>
    </div>

    <div class="col m6 s12"
    data-aos="zoom-in-up"
    data-aos-offset="200"
    data-aos-delay="400"
    data-aos-easing="ease"
    data-aos-mirror="true"
    data-aos-once="false">
    <form action="index.php" method="post">
      <div class="card-panel">
        <h5>Kirim Pesan Kepada Kami</h5>
        <div class="input-field">
          <input type="text" name="name" id="name" required>
          <label for="name">Name</label>
        </div>
        <div class="input-field">
          <input type="email" name="email" id="email" required>
          <label for="email">Email</label>
        </div>
        <div class="input-field">
          <input type="text" name="phone" id="phone" required>
          <label for="phone">Phone Number</label>
        </div>
        <div class="input-field">
          <textarea name="judul" id="judul" class="materialize-textarea" required></textarea>
          <label for="message">Judul</label>
        </div>
        <div class="input-field">
          <textarea name="pesan" id="message" class="materialize-textarea" required></textarea>
          <label for="message">Message</label>
        </div>
        <button type="submit" class="btn blue darken-2">Send</button>
      </div>
    </form>
  </div>
</div>
</div>
</section>


<!-- footer -->
<footer class="blue darken-3 grey-text center">
  <?php 
  foreach ($sql as $sql) {
    echo "<p>Jumlah Pengunjung : $sql[total] </p>";
  }
   ?>
  <p>Gajah Mada College. Copyright 2019</p>
</footer>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="assets/js/materialize.min.js"></script>

<script src="assets/js/javacustom.js"></script>
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

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
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
<?php

if(isset($_COOKIE['pesan'])=="sukses") {?>
  <script>
    alert("Pengiriman Pesan Sukses");
  </script>
  <?php
} else if(isset($_COOKIE['pesan'])=="gagal"){?>
  <script>
    alert("Pengiriman Pesan Gagal");
  </script>
<?php }
?>