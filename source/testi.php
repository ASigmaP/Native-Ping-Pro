<!DOCTYPE html>
<html>
<head>
	<title>Ping PRO | Project</title>
	<link rel="stylesheet" href="web1.css">
</head>
<body>
	<div class="container">
		<a href="dashboard.html" class="logo">@</a>
		<div class="header">
			<ul>
				<li><a href="home.html">Home</a></li>
				<li><a href="service.html">Services</a></li>
				<li><a href="testi.php">Testimoni</a></li>
				<li><a href="about.html">About Us</a></li>
				<li><a href="join.html">Join</a></li>
				<li><a href="login.html">Login</a></li>
			</ul>
		</div>
		<div class="content">
			<hr width="80%">
			<h2>PING PRO's Testimoni</h2>
			<div class="testi">
</html>

<?php
include "koneksi.php";
	$sql = "SELECT * FROM testimoni";
	$q = $koneksi->query($sql);
	if($q->num_rows > 0){
		while($baris=$q->fetch_assoc()){
			$NIKClient = $baris['NIKClient'];
			$testi = $baris['testi'];
			$sql1 = "SELECT * FROM client WHERE NIK='$NIKClient'";
			$q1 = $koneksi->query($sql1);
			if($q1->num_rows > 0){
			while($baris1=$q1->fetch_assoc()){
			$nmClient = $baris1['nmClient'];
			echo "<table><tr valign='top'><td width='200px' align='center'><b>$nmClient</b></td></tr><tr><td width='1000px' align='center'>$testi</td></tr>";
		}}
		}
		echo "</table>";
	}else{
		echo "Data Tidak Ditemukan";

	}
	$koneksi->close();
?>

<html>
</div>
</div>
</div>
</body>
</html>