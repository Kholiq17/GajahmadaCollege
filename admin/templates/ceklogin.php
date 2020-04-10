<?php 
include '../../database/config.php';
 
session_start();
 
if($_SESSION['status'] !="Login"){
	header("location:../../login/index.php");
}
?>