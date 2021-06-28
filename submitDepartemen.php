<?php
include "buat_tabel.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	$kode_departemen = trim($_POST['kode_departemen']);
	$nama_departemen = trim($_POST['nama_departemen']);
	$id_manajer = trim($_POST['id_manajer']);
	$tanggal_mulai_manajer = trim($_POST['tanggal_mulai_manajer']);
}
if(!empty($kode_departemen) && !empty($nama_departemen)){
	$sql = "INSERT INTO Departemen (
	kode_departemen, nama_departemen, tanggal_mulai_manajer) VALUES (
	'$kode_departemen','$nama_departemen','$tanggal_mulai_manajer')";
	$q = $koneksi->query($sql);
	if ($q === FALSE){
		echo "Submit Data Gagal. ".$koneksi->error;
	}else{
		include "showDep.php";
	}
}

?>