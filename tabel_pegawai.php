<?php
include "koneksi.php";

$sql = "CREATE TABLE client (
NIK int(17) PRIMARY KEY,
nmClient varchar(30) NOT NULL,
jenis_kelamin enum('p','w'),
alamat varchar(150),
noHP int(13),
IDUser varchar(30))";
$q = $koneksi->query($sql);
if ($q === TRUE){
	echo "Tabel Pegawai sukses dibuat.";
}else{
	echo "Gagal membuat tabel. ".$koneksi->error;
}
$koneksi->close();
?>