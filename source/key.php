<!DOCTYPE html>
<html>
<head>
	<title>Ping PRO | Update Password</title>
	<link rel="stylesheet" href="web1.css">
</head>
<body>
	<div class="container">
		<a href="homeAdm.html" class="logo">@</a>
		<div class="header">
			<ul>
				<li><a href="homeAdm.html">Home</a></li>
				<li><a href="allProject.php">Project</a></li>
				<li><a href="allClient.php">Client</a></li>
				<li><a href="home.html">Logout</a></li>
				<li><a href="key.php" class="key"></a></li>
			</ul>
		</div>
		<div class="content">
			<hr width="80%">
			<h2>Update your password here</h2>
			<div class="homeTab">
</html>

<?php
include "koneksi.php";
session_start();
$IDUser = $_SESSION["IDUser"];
	$sql = "SELECT * FROM user WHERE IDUser='$IDUser'";
	$q = $koneksi->query($sql);
	if($q->num_rows > 0){
	while($baris=$q->fetch_array()){
	$IDUser = $baris['IDUser'];
	$pwdUser = $baris['pwdUser'];
	
	echo "<form name='myForm' action='updatePass.php? IDUser=$IDUser' method='post'>
	<table>
		<tbody><tr>
			<td width='20%'>Username</td>
			<td width='5%'>:</td>
			<td width='75%'>$IDUser</td>
		</tr>
		<tr>
			<td>New Pass</td>
			<td>:</td>
			<td><input type='password' name='pwdUser' size='30' required=''></td>
			</tr></tbody></table>";
		}
	}else{
		echo "Data Tidak Ditemukan";
	}
	$koneksi->close();
?>


<html>
</div>
<input type="submit" value="Simpan">
<input type="reset" value="Batal">
</form>
</div>
</div>
</body>
</html>