<?php
include "koneksi.php";

$sql = "CREATE TABLE project (
IDProj int(6) AUTO_INCREMENT PRIMARY KEY,
dateProj date,
nmProj varchar(30) NOT NULL,
domain varchar(30),
targetProj varchar(100),
tujuanProj varchar(100),
fiturProj varchar(500),
protoProj varchar(100),
IDClient int(17) NOT NULL)";
$q = $koneksi->query($sql);
if ($q === TRUE){
	echo "Tabel Project sukses dibuat.";
}else{
	echo "Gagal membuat tabel. ".$koneksi->error;
}
$koneksi->close();
?>