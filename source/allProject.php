<!DOCTYPE html>
<html>
<head>
	<title>Ping PRO | Project</title>
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
			<h2>PING PRO's List Project</h2>
			<div class="showProj">
</html>

<?php
include "koneksi.php";
	$sql = "SELECT * FROM project";
	$q = $koneksi->query($sql);
	if($q->num_rows > 0){
	echo "<table border='1' align='center'><tr><th width='50px'>ID</th><th width='200px'>Client</th><th width='200px'>Nama</th><th width='80px'>Tanggal</th><th width='200px'>Domain</th><th width='200px'>Target</th><th width='300px'>Tujuan</th><th width='500px'>Fitur yang diinginkan</th><th width='100px'>Perintah</th></tr>";
		while($baris=$q->fetch_assoc()){
			$IDProj = $baris['IDProj'];
			$nmProj = $baris['nmProj'];
			$dateProj = $baris['dateProj'];
			$domain = $baris['domain'];
			$targetProj = $baris['targetProj'];
			$tujuanProj = $baris['tujuanProj'];
			$fiturProj = $baris['fiturProj'];
			$protoProj = $baris['protoProj'];
			$IDClient = $baris['IDClient'];
			$sql1 = "SELECT * FROM client WHERE NIK='$IDClient'";
			$q1 = $koneksi->query($sql1);
			if($q1->num_rows > 0){
			while($baris1=$q1->fetch_assoc()){
			$nmClient = $baris1['nmClient'];
			echo "<tr valign='top'><td>$IDProj</td><td>$nmClient</td><td>$nmProj</td><td>$dateProj</td><td>$domain</td><td>$targetProj</td><td align='left'>$tujuanProj</td><td align='left'>$fiturProj</td><td><a href='$protoProj'>Prototype</a> <a href='progressAdm.php?IDProj=$IDProj'>Progress</a>   <a href='hapusProj.php?IDProj=$IDProj'>Hapus</a></td></tr>";
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