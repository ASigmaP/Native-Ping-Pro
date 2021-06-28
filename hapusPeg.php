<?php
include "buat_tabel.php";
	$idPegawai = $_GET['idPegawai'];

	$sql = "DELETE FROM pegawai WHERE idPegawai='$idPegawai'";
	$q = $koneksi->query($sql);
	if ($q === FALSE){
		echo "Update Data Gagal. ".$koneksi->error;
	}else{
		include "showPeg.php";
	}
$koneksi->close();
?>