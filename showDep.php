<!DOCTYPE html>
<html>
<head>
	<title>Latihan Box Model</title>
	<link rel="stylesheet" href="Home.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1 class="judul">Pengembangan Aplikasi WEB</h1>
			<ul>
				<li><a href="HomeformPeg.html">Pegawai</a></li>
				<li><a href="HomeformDep.html">Departemen</a></li>
				<li><a href="showPeg.php">Tabel Pegawai</a></li>
				<li><a href="#">Tabel Departemen</a></li>

			</ul>
		</div>
		<div class="content">
			<hr width="80%">
			<h2>HASIL DATA DEPARTEMEN</h2>
			<div class="homeTab">
</html>

<?php
include "buat_tabel.php";
	$sql = "SELECT * FROM departemen";
	$q = $koneksi->query($sql);
	echo "<table border='1'>
	<tr>
	<th>Kode Departemen</th><th>Nama Departemen</th><th>ID Manajer</th><th>Tanggal Mulai Manajer</th><th>Perintah</th>
	</tr>";
	if($q->num_rows > 0){
		while($baris=$q->fetch_assoc()){
			$kode_departemen = $baris['kode_departemen'];
			$nama_departemen = $baris['nama_departemen'];
			$id_manajer = $baris['id_manajer'];
			$tanggal_mulai_manajer = $baris['tanggal_mulai_manajer'];
			echo "<tr><td>$kode_departemen</td>";
			echo "<td>$nama_departemen</td><td>$id_manajer</td><td>$tanggal_mulai_manajer</td>";
			echo "
			<td> <a href='ubahDep.php? kode_departemen=$kode_departemen'>Edit</a>
			<a href='hapusDep.php? kode_departemen=$kode_departemen'>Hapus</a></td></tr>";
		}
		echo "</table>";
	}else{
		echo "Data Tidak Ditemukan";
	}
	$koneksi->close();
?>

<html>
</div>
		
		<div class="footer">
			<p class="copy">Copyright 2017&copyNiky Ayu Lestari</p>
		</div>
	</div>
</body>
</html>