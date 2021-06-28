<?php
include "koneksi.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	$IDUser = trim($_POST['IDUser']);
	$pwdUser = trim($_POST['pwdUser']);
}

$sql = "SELECT * FROM user WHERE IDUser='$IDUser' && pwdUser='$pwdUser'";
$q = $koneksi->query($sql);
if($q->num_rows > 0){
	$sql1 = "SELECT * FROM client WHERE userID='$IDUser'";
	$q1 = $koneksi->query($sql1);
	if($q1->num_rows > 0){
		while($baris1=$q1->fetch_array()){
			session_start();
			$_SESSION['NIK']= $baris1['NIK'];
		}
	}
	echo "<script>window.location='dashboard.html'</script>";
}else{
	echo "<script>alert('Terjadi kesalahan, periksa kembali Username atau Password Anda !');window.location='login.html'</script>";
}
?>
