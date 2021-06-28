<!DOCTYPE html>
<html>
<head>
	<title>Ping PRO | Client</title>
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
			<h2>PING PRO's List Client</h2>
			<div class="showProj">
</html>

<?php
include "koneksi.php";
	$sql = "SELECT * FROM client";
	$q = $koneksi->query($sql);
	if($q->num_rows > 0){
	echo "<table border='1' align='center'><tr><th width='100px'>NIK</th><th width='200px'>Nama</th><th width='80px'>JK</th><th width='300px'>Alamat</th><th width='200px'>No. HP</th></tr>";
		while($baris=$q->fetch_assoc()){
			$NIK = $baris['NIK'];
			$nmClient = $baris['nmClient'];
			$userID = $baris['userID'];
			$JK = $baris['JK'];
			$alamat = $baris['alamat'];
			$noHP = $baris['noHP'];

			echo "<tr valign='top'><td>$NIK</td><td>$nmClient</td>";
			if($JK=='w'){
			echo"<td>Wanita</td>";
			}else{
			echo"<td>Pria</td>";
			}
				echo"<td>$alamat</td><td>$noHP</td></tr>";
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