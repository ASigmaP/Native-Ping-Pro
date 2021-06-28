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
				<li><a href="dashboard.html">Procedure</a></li>
				<li><a href="createorder.html">Create</a></li>
				<li><a href="showproject.php">Project</a></li>
				<li><a href="home.html">Logout</a></li>
				<li><a href="profile.php" class="me"></a></li>
			</ul>
		</div>
		<div class="content">
			<hr width="80%">
			<h2>Your project with PING PRO</h2>
			<div class="showPeg">
</html>

<?php
include "koneksi.php";
session_start();
$IDClient = $_SESSION["NIK"];
	$sql = "SELECT * FROM project WHERE IDClient='$IDClient'";
	$q = $koneksi->query($sql);
	if($q->num_rows > 0){
	echo "<table border='1' align='center'><tr><th width='150px'>Nama Project</th><th width='100px'>Tanggal Pembuatan</th><th width='150px'>Domain</th><th width='100px'>Target</th><th width='300px'>Tujuan</th><th width='300px'>Fitur yang diinginkan</th><th width='100px'>Prototype</th><th width='120px'>Perintah</th></tr>";
		while($baris=$q->fetch_assoc()){
			$IDProj = $baris['IDProj'];
			$nmProj = $baris['nmProj'];
			$dateProj = $baris['dateProj'];
			$domain = $baris['domain'];
			$targetProj = $baris['targetProj'];
			$tujuanProj = $baris['tujuanProj'];
			$fiturProj = $baris['fiturProj'];
			$protoProj = $baris['protoProj'];
			echo "<tr><td>$nmProj</td><td>$dateProj</td><td>$domain</td><td>$targetProj</td><td align='left'>$tujuanProj</td><td align='left'>$fiturProj</td><td>$protoProj</td><td><a href='progress.php?IDProj=$IDProj'>Progress</a>   <a href='hapusProj.php?IDProj=$IDProj'>Hapus</a></td></tr>";
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