<?php
include "buat_tabel.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	$nama_depan = trim($_POST['nama_depan']);
	$nama_belakang = trim($_POST['nama_belakang']);
	$tanggal_lahir = trim($_POST['tanggal_lahir']);
	$jenis_kelamin = trim($_POST['jenis_kelamin']);
	$alamat = trim($_POST['alamat']);
	$gaji = trim($_POST['gaji']);
}

if(!empty($nama_depan) && !empty($nama_belakang)){
	$sql2 = "SELECT FROM pegawai WHERE nama_depan='$nama_depan' && nama_belakang='$nama_belakang'";
	$q2 = $koneksi->query($sql2);
	if ($q2 == 0){
	
	$sql = "INSERT INTO pegawai (
	idPegawai, nama_depan, nama_belakang, tanggal_lahir, jenis_kelamin, alamat, gaji) VALUES (
	'','$nama_depan','$nama_belakang','$tanggal_lahir','$jenis_kelamin','$alamat','$gaji')";
	$q = $koneksi->query($sql);
	if ($q === FALSE){
		echo "Submit Data Gagal. ".$koneksi->error;
	}else{
		include "showPeg.php";
	}

	}else{
		include "HomeformPeg.html";
		echo "
		window.alert ('Terjadi Duplikasi Data ! \n' +
		       'Silahkan mengisi form kembali.');
		";
	}
}
?>