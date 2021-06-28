<?php
include "koneksi.php";

$sql = "CREATE TABLE client (
NIK int(17) PRIMARY KEY,
nmClient varchar(50) NOT NULL,
JK enum('p','w'),
alamat varchar(150),
noHP varchar(13),
userID varchar(30))";
$q = $koneksi->query($sql);
if ($q === TRUE){
	echo "Tabel Client sukses dibuat.";
}else{
	echo "Gagal membuat tabel. ".$koneksi->error;
}
$koneksi->close();
?>