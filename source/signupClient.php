<?php
include "koneksi.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	$IDUser = trim($_POST['IDUser']);
	$pwdUser = trim($_POST['pwdUser']);
	$NIK = trim($_POST['NIK']);
	$nmClient = trim($_POST['nmClient']);
	$JK = trim($_POST['JK']);
	$alamat = trim($_POST['alamat']);
	$noHP = trim($_POST['noHP']);
}

$sql = "SELECT FROM client WHERE NIK='$NIK'";
$q = $koneksi->query($sql);
if ($q == 0){
	
	$sql1 = "INSERT INTO user (IDUser, pwdUser) VALUES ('$IDUser','$pwdUser')";
	$q1 = $koneksi->query($sql1);
	if ($q1 === FALSE){
		echo "Submit Data Gagal. ".$koneksi->error;
	}
	$sql2 = "INSERT INTO client (NIK, nmClient, JK, alamat, noHP, userID) VALUES ('$NIK', '$nmClient', '$JK', '$alamat', '$noHP', '$IDUser')";
	$q2 = $koneksi->query($sql2);
	if ($q2 === FALSE){
		echo "Submit Data Gagal. ".$koneksi->error;
	}$sql = "INSERT INTO testimoni (IDTesti, testi, NIKClient) VALUES ('','Ini adalah pertama kalinya saya menggunakan PING Pro','$NIK')";
	$q = $koneksi->query($sql);
	if ($q === FALSE){
		echo "Submit Data User Gagal. ".$koneksi->error;
	}else{
			echo "<script>window.location='login.html'</script>";
	}
}else{
	include "join.html";
}
?>