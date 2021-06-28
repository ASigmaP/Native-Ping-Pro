<!DOCTYPE html>
<html>
<head>
	<title>Ping PRO | Profile</title>
	<link rel="stylesheet" href="web1.css">
</head>
<body>
	<div class="container">
		<a href="dashboard.html" class="logo">@</a>
		<div class="header">
			<ul>
				<li><a href="dashboard.html">Home</a></li>
				<li><a href="createorder.html">Create</a></li>
				<li><a href="showproject.php">Project</a></li>
				<li><a href="home.html">Logout</a></li>
				<li><a href="profile.php" class="me"></a></li>
			</ul>
		</div>
		<div class="content">
			<hr width="80%">
</html>

<?php
include "koneksi.php";
session_start();
$NIK = $_SESSION["NIK"];
	$sql = "SELECT * FROM client WHERE NIK='$NIK'";
	$q = $koneksi->query($sql);
	if($q->num_rows > 0){
	while($baris=$q->fetch_array()){
	$NIK = $baris['NIK'];
	$nmClient = $baris['nmClient'];
	$JK = $baris['JK'];
	$alamat = $baris['alamat'];
	$noHP = $baris['noHP'];
	echo "
	<h2>Hi, $nmClient !</h2>
	<div class='homeTab'>
	<form name='myForm' action='editProfile.php? NIK=$NIK' method='post'>
	<table>
		<tbody><tr>
			<td width='20%'>NIK</td>
			<td width='5%'>:</td>
			<td width='70%'>$NIK</td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td>$nmClient</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>";
				if($JK=='w'){
					echo "<td>Wanita</td>";
				} else {
					echo "<td>Pria</td>";
				}
			echo "
			</tr>
			<tr>
				<td valign='top'>Alamat</td>
				<td valign='top'>:</td>
				<td>$alamat</td>
			</tr>
			<tr>
				<td>No. HP</td>
				<td>:</td>
				<td>$noHP</td>
			</tr>";
		}
	}else{
		echo "Data Tidak Ditemukan";
	}
	$sql1 = "SELECT * FROM testimoni WHERE NIKClient='$NIK'";
	$q1 = $koneksi->query($sql1);
	if($q1->num_rows > 0){
	while($baris1=$q1->fetch_array()){
		$testi = $baris1['testi'];
		echo "
		<tr>
			<td valign='top'>Testimoni</td>
			<td valign='top'>:</td>
			<td>$testi</td>
		</tr>
		</tbody>
		</table>";
	}
	}else{
		echo "Data Tidak Ditemukan";
	}
	$koneksi->close();
?>

<html>
</div>
<div class="tombol"><input type="submit" value="Edit Profile"></div>
</form>
</div>
</div>
</body>
</html>