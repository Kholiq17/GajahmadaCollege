<?php 
include '../templates/ceklogin.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>
		Halaman Admin
	</title>
	<?php include '../templates/header.php'; ?>
</head>

<body class="">
	<div class="wrapper ">
		<div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="logo">
    	<a href="#" class="simple-text logo-mini">
    		<div class="logo-image-small">
    			<img src="../assets/img/logo-small.png">
    		</div>
    	</a>
    	<a href="#" class="simple-text logo-normal">
    		Admin
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
        </div> -->
    </a>
</div>
<div class="sidebar-wrapper">
	<ul class="nav">
		<li class="active ">
			<a href="../dashboard">
				<i class="nc-icon nc-bank"></i>
				<p>Dashboard</p>
			</a>
		</li>
		<li>
			<a href="../gallery">
				<i class="nc-icon nc-album-2"></i>
				<p>Gallery</p>
			</a>
		</li>
		<li>
			<a href="../password">
				<i class="nc-icon nc-lock-circle-open"></i>
				<p>Password</p>
			</a>
		</li>
		<li>
			<a href="../logout/index.php">
				<i class="nc-icon nc-button-power"></i>
				<p>Logout</p>
			</a>
		</li>
	</ul>
</div>
</div>
<div class="main-panel">
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
		<div class="container-fluid">
			<div class="navbar-wrapper">
				<div class="navbar-toggle">
					<button type="button" class="navbar-toggler">
						<span class="navbar-toggler-bar bar1"></span>
						<span class="navbar-toggler-bar bar2"></span>
						<span class="navbar-toggler-bar bar3"></span>
					</button>
				</div>
				<a class="navbar-brand" href="#pablo">LP3 GAJAH MADA COLLEGE</a>
			</div>
		</div>
	</nav>
	<!-- End Navbar -->

	<!-- content -->
	<div class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-user">
					<div class="card-header">
						<div class="row">
							<div class="col-6">
								<h5 class="card-title">Data Post</h5>
							</div>
							<div class="col-6 text-right">
								<a href="tambahpost.php"><button class="btn btn-primary" type="button">Tambah Post</button></a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<?php include 'proses/seluruhpost.php'; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end content -->
	<!-- footer -->
	<footer class="footer footer-black  footer-white ">
		<div class="container-fluid">
			<div class="row">
				<div class="credits ml-auto">
					<span class="copyright">
						©
						<script>
							document.write(new Date().getFullYear())
						</script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
					</span>
				</div>
			</div>
		</div>
	</footer>
</div>
</div>
<?php include '../templates/kaki.php'; ?>

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
