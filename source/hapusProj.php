<?php
include "koneksi.php";
	$IDProj = $_GET['IDProj'];
	$sql1 = "DELETE FROM progress WHERE projID='$IDProj'";
	$q1 = $koneksi->query($sql1);
	if ($q1 === FALSE){
		echo "Hapus Data Gagal. ".$koneksi->error;
	}
	$sql = "DELETE FROM project WHERE IDProj='$IDProj'";
	$q = $koneksi->query($sql);
	if ($q === FALSE){
		echo "Hapus Data Gagal. ".$koneksi->error;
	}else{
		include "showProject.php";
	}
$koneksi->close();
?>