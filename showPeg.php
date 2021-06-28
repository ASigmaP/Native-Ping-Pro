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
				<li><a href="#">Tabel Pegawai</a></li>
				<li><a href="showDep.php">Tabel Departemen</a></li>

			</ul>
		</div>
		<div class="content">
			<hr width="80%">
			<h2>HASIL DATA PEGAWAI</h2>
			<div class="showPeg">
</html>

<?php
include "buat_tabel.php";
	$sql = "SELECT * FROM pegawai";
	$q = $koneksi->query($sql);
	echo "<table border='1'>
	<tr>
	<th>ID</th><th>Nama Depan</th><th>Nama Belakang</th><th>Tgl Lahir</th><th>Jenis Kelamin</th><th>Alamat</th><th>Gaji</th><th>Perintah</th>
	</tr>";
	if($q->num_rows > 0){
		while($baris=$q->fetch_assoc()){
			$idPegawai = $baris['idPegawai'];
			$nama_depan = $baris['nama_depan'];
			$nama_belakang = $baris['nama_belakang'];
			$tanggal_lahir = $baris['tanggal_lahir'];
			$jenis_kelamin = $baris['jenis_kelamin'];
			$alamat = $baris['alamat'];
			$gaji = $baris['gaji'];
			echo "<tr><td>$idPegawai</td>";
			echo "<td>$nama_depan</td><td>$nama_belakang</td><td>$tanggal_lahir</td>";
			if($jenis_kelamin=='w'){
				echo "<td>Wanita</td>";
			} else {
				echo "<td>Pria</td>";
			}
			echo"<td>$alamat</td><td>$gaji</td><td> <a href='ubahPeg.php?idPegawai=$idPegawai'>Edit</a>  <a href='hapusPeg.php?idPegawai=$idPegawai'>Hapus</a></td></tr>";
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