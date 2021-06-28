<!DOCTYPE html>
<html>
<head>
	<title>Ping PRO | Edit Profile</title>
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
			<h2>Update your profile here</h2>
			<div class="homeTab">
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
	echo "<form name='myForm' action='updateProfile.php? NIK=$NIK' method='post'>
	<table>
		<tbody><tr>
			<td width='20%'>NIK</td>
			<td width='5%'>:</td>
			<td width='70%'>$NIK</td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input type='text' name='nmClient' size='30' value='$nmClient' required=''></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>";
			if ($JK='w'){
				echo "
				<input type='radio' name='JK' value='p'>Pria
				<input type='radio' name='JK' value='w' checked>Wanita</td>";
			}else{
		        	echo "
		            <input type='radio' name='JK' value='p' checked>Pria
		            <input type='radio' name='JK' value='w'>Wanita</td>";
		        }
		    echo "
		    </tr>
			<tr>
				<td valign='top'>Alamat</td>
				<td valign='top'>:</td>
				<td><textarea name='alamat' rows='4' cols='25' value='$alamat' required=''></textarea></td>
			</tr>
			<tr>
				<td>No. HP</td>
				<td>:</td>
				<td><input type='text' name='noHP' size='13' value='$noHP' required=''></td>
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
			<td valign='top'>Testimoni Anda</td>
			<td valign='top'>:</td>
			<td><textarea name='testi' rows='5' cols='25' value='$testi' required=''></textarea></td>
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
<input type="submit" value="Simpan">
<input type="reset" value="Reset">
</form>

</form>
</div>
</div>
</body>
</html>