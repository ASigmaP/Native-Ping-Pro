<?php
include "koneksi.php";
session_start();
$NIK = $_SESSION["NIK"];
if (!isset($_POST['submit'])){
	$nmClient = $_POST['nmClient'];
	$JK = $_POST['JK'];
	$alamat = $_POST['alamat'];
	$noHP = $_POST['noHP'];
	$testi = $_POST['testi'];
	$sql = "UPDATE client SET nmClient='$nmClient', JK='$JK', alamat='$alamat', noHP='$noHP' WHERE NIK='$NIK'";
	$q = $koneksi->query($sql);
	if ($q === FALSE){
		echo "Update Data Client Gagal. ".$koneksi->error;
	}
	$sql1 = "UPDATE testimoni SET testi='$testi' WHERE NIKClient='$NIK'";
	$q1 = $koneksi->query($sql1);
	if ($q1 === FALSE){
		echo "<script>alert('Update profile gagal !');window.location='editProfile.php'</script>";
	}else{
		echo "<script>window.location='profile.php'</script>";
	}
	
}else{
	print "Gagal";
}
$koneksi->close();
?>