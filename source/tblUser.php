<?php
include "koneksi.php";

$sql = "CREATE TABLE user (
IDUser varchar(30) PRIMARY KEY,
pwdUser varchar(30) NOT NULL,
role varchar(10) DEFAULT 'Client')";
$q = $koneksi->query($sql);
if ($q === TRUE){
	echo "Tabel User sukses dibuat.";
}else{
	echo "Gagal membuat tabel. ".$koneksi->error;
}
$koneksi->close();
?>