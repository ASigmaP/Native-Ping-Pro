<?php
include "koneksi.php";
session_start();
$IDUser = $_SESSION["IDUser"];
if (!isset($_POST['submit'])){
	$pwdUser = $_POST['pwdUser'];
	$sql = "UPDATE user SET pwdUser='$pwdUser' WHERE IDUser='$IDUser'";
	$q = $koneksi->query($sql);
	if ($q === FALSE){
		echo "Update Password Gagal. ".$koneksi->error;
	}else{
		echo "<script>window.location='login.html'</script>";
	}
	
}else{
	print "Gagal";
}
$koneksi->close();
?>