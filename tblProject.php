<?php
include "koneksi.php";

$sql = "CREATE TABLE project (
IDProj int(6) AUTO_INCREMENT PRIMARY KEY,
dateProj date,
nmProj varchar(30) NOT NULL,
domain varchar(30),
deskProj varchar(500),
IDClient int(17) NOT NULL)";
$q = $koneksi->query($sql);
if ($q === TRUE){
	echo "Tabel Project sukses dibuat.";
}else{
	echo "Gagal membuat tabel. ".$koneksi->error;
}
$koneksi->close();
?>