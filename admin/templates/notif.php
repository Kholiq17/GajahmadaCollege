<?php 
// notifikasi update data
if (isset($_GET['update'])) {
	$update = $_GET['update'];
	if ($update ==  "sukses") { ?>
		<script>
			$(document).ready(function () {
				Swal.fire(
					'Berhasil!',
					'Update Data Sukses!',
					'success'
					)
			});
		</script>
		<?php
	}
	else{ ?>
		<script>
			$(document).ready(function () {
				Swal.fire(
					'Gagal!',
					'Update Data Gagal!',
					'error'
					)
			});
		</script>
		<?php
	}
}
// penutup notifikasi update data
?>

<?php 
// notifikasi update data
if (isset($_GET['foto'])) {
	$update = $_GET['foto'];
	if ($update ==  "sukses") { ?>
		<script>
			$(document).ready(function () {
				Swal.fire(
					'Berhasil!',
					'Foto Berhasil Upload!',
					'success'
					)
			});
		</script>
		<?php
	}
	else{ ?>
		<script>
			$(document).ready(function () {
				Swal.fire(
					'Gagal!',
					'Foto Gagal Upload!',
					'error'
					)
			});
		</script>
		<?php
	}
}
// penutup notifikasi update data
?>

<?php 
// notifikasi update data
if (isset($_GET['tambah'])) {
	$update = $_GET['tambah'];
	if ($update ==  "sukses") { ?>
		<script>
			$(document).ready(function () {
				Swal.fire(
					'Berhasil!',
					'Data Berhasil di Tambah!',
					'success'
					)
			});
		</script>
		<?php
	}
	else{ ?>
		<script>
			$(document).ready(function () {
				Swal.fire(
					'Gagal!',
					'Data Gagal ditambah!',
					'error'
					)
			});
		</script>
		<?php
	}
}
// penutup notifikasi update data

if (isset($_GET['hapus'])) {
	$update = $_GET['hapus'];
	if ($update ==  "sukses") { ?>
		<script>
			$(document).ready(function () {
				Swal.fire(
					'Berhasil!',
					'Data Berhasil di Hapus!',
					'success'
					)
			});
		</script>
		<?php
	}
	else{ ?>
		<script>
			$(document).ready(function () {
				Swal.fire(
					'Gagal!',
					'Data Gagal dihapus!',
					'error'
					)
			});
		</script>
		<?php
	}
}

?>