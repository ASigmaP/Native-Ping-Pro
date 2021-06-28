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
				<li><a href="HomeformPeg.html">Departemen</a></li>
				<li><a href="showPeg.php">Tabel Pegawai</a></li>
				<li><a href="#">Tabel Departemen</a></li>
			</ul>
		</div>
		<div class="content">
			<hr width="80%">
			<h2>EDIT DATA DEPARTEMEN</h2>
			<div class="homeTab">
		    <table>
		        <tbody>
</html>

<?php
include "buat_tabel.php";
$kode_departemen = $_GET['kode_departemen'];
	$sql = "SELECT * FROM departemen where kode_departemen='$kode_departemen'";
	$q = $koneksi->query($sql);
	$sql2 = "SELECT idPegawai, nama_depan, nama_belakang from pegawai ORDER BY nama_depan";
	$q2 = $koneksi->query($sql2);
	if($q->num_rows > 0){
	echo "<form action='updateDep.php? kode_departemen=$kode_departemen' method='POST'>";
		while($baris=$q->fetch_array()){
			$kode_departemen = $baris['kode_departemen'];
			$nama_departemen = $baris['nama_departemen'];
			echo "
			<tr>
				<td width='30%'>Kode Departemen</td>
				<td width='5%'>:</td>
				<td width='60%'><input type='text' name='kode_departemen' size='30' readonly value='".$baris['kode_departemen']."'></td>
			</tr>
		    <tr>
		        <td>Nama Departemen</td>
		        <td>:</td>
		        <td><input type='text' name='nama_departemen' size='30' value='".$baris['nama_departemen']."'></td>
		    </tr>
		    <tr>
		        <td>Nama Manajer</td>
		        <td>:</td>";
		        if($q2->num_rows > 0){
		        	echo "<td><select name='id_manajer'>";
		        	while($row=$q2->fetch_array()){
		        	echo "<option value='".$row['idPegawai']."'>".$row['nama_depan']." ".$row['nama_belakang']."</option>";}
		        	echo "</select></td>";
		    	}else{
		    		echo "Data tidak ditemukan";
		    	}
		    	echo "
		    	<tr>
				<td>Mulai Menjabat</td>
				<td>:</td>
				<td><input type='date' name='tanggal_mulai_manajer' value='".$baris['tanggal_mulai_manajer']."'></td>
				</tr>";
			}
?>

<html>
</tbody>
</table>
</div>
		<input type="submit" value="Edit">
		<input type="reset" value="Reset">
		</form>
</html>
<?php
} else {
	echo "Data dengan Kode Departemen $kode_departemen tidak ditemukan";
}
$koneksi->close();
?>
<html>	
		<div class="footer">
			<p class="copy">Copyright 2017&copyNiky Ayu Lestari</p>
		</div>
	</div>
</body>
</html>