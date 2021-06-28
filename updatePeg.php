<?php
include "buat_tabel.php";
	$idPegawai = $_GET['idPegawai'];
if (!isset($_POST['submit'])){
	$nama_depan = $_POST['nama_depan'];
	$nama_belakang = $_POST['nama_belakang'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$gaji = $_POST['gaji'];

	$sql = "UPDATE pegawai SET nama_depan='$nama_depan', nama_belakang='$nama_belakang', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', gaji='$gaji' WHERE idPegawai='$idPegawai'";
	$q = $koneksi->query($sql);
	if ($q === FALSE){
		echo "Update Data Gagal. ".$koneksi->error;
	}else{
		include "showPeg.php";
	}
	
}else{
	print "Gagal";
}
$koneksi->close();
?>