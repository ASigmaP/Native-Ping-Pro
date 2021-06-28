<?php
include "buat_tabel.php";
	$kode_departemen = $_GET['kode_departemen'];

	$sql = "DELETE FROM departemen WHERE kode_departemen='$kode_departemen'";
	$q = $koneksi->query($sql);
	if ($q === FALSE){
		echo "Update Data Gagal. ".$koneksi->error;
	}else{
		include "showDep.php";
	}
$koneksi->close();
?>