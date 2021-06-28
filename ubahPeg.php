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
				<li><a href="showDep.php">Tabel Departemen</a></li>
			</ul>
		</div>
		<div class="content">
			<hr width="80%">
			<h2>EDIT DATA PEGAWAI</h2>
			<div class="homeTab">
		    <table>
		        <tbody>
</html>

<?php
include "buat_tabel.php";
$idPegawai = $_GET['idPegawai'];
	$sql = "SELECT * FROM pegawai where idPegawai='$idPegawai'";
	$q = $koneksi->query($sql);
	if($q->num_rows > 0){
	echo "<form action='updatePeg.php? idPegawai=$idPegawai' method='POST'>";
		while($baris=$q->fetch_array()){
			$nama_depan = $baris['nama_depan'];
			$nama_belakang = $baris['nama_belakang'];
			$tanggal_lahir = $baris['tanggal_lahir'];
			$jenis_kelamin = $baris['jenis_kelamin'];
			$alamat = $baris['alamat'];
			$gaji = $baris['gaji'];
			
			echo "
			<tr>
				<td width='30%'>Nama Depan</td>
				<td width='5%'>:</td>
				<td width='60%'><input type='text' name='nama_depan' size='30' value='".$baris['nama_depan']."'></td>
			</tr>
		    <tr>
		        <td>Nama Belakang</td>
		        <td>:</td>
		        <td><input type='text' name='nama_belakang' size='30' value='".$baris['nama_belakang']."'></td>
		    </tr>
		    <tr>
		        <td>Tanggal Lahir</td>
		        <td>:</td>
		        <td><input type='date' name='tanggal_lahir' size='30' value='".$baris['tanggal_lahir']."'></td>
		    </tr>
		    <tr>
		        <td>Jenis Kelamin</td>
		        <td>:</td>
		        <td>";
		        if ($jenis_kelamin='w'){
		        	echo "
		        	<input type='radio' name='jenis_kelamin' value='p'>Pria
		            <input type='radio' name='jenis_kelamin' value='w' checked>Wanita</td>";
		        }else{
		        	echo "
		            <input type='radio' name='jenis_kelamin' value='p' checked>Pria
		            <input type='radio' name='jenis_kelamin' value='w'>Wanita</td>}";
		        }
		    echo "
		    </tr>
		    <tr>
		        <td valign='top'>Alamat</td>
		        <td valign='top'>:</td>
		        <td><textarea name='alamat' rows='7' cols='35' value='".$baris['alamat']."'></textarea></td>
		    </tr>
		    <tr>
		        <td>Gaji</td>
		        <td>:</td>
		        <td><input type='text' name='gaji' size='30' value='".$baris['gaji']."'></td>
		    </tr>";
			}
?>

<html>
</tbody>
</table>
</div>
		<input type="submit" value="Submit">
		<input type="reset" value="Reset">
		</form>
</html>
<?php
} else {
	echo "Data dengan ID Pegawai $idPegawai tidak ditemukan";
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