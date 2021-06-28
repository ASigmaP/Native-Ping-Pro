<?php
include "buat_tabel.php";

$sql = "CREATE TABLE Departemen (
kode_departemen char(6) PRIMARY KEY,
nama_departemen VARCHAR(100) UNIQUE NOT NULL,
id_manajer int(6) UNSIGNED,
tanggal_mulai_manajer date
)";
$q = $koneksi->query($sql);
if ($q === TRUE){
	echo "Tabel Departemen sukses dibuat";
}else{
	echo "Gagal membuat tabel. ".$koneksi->error;
}
$koneksi->close();
?>