<?php
include "koneksi.php";

$sql = "ALTER TABLE client
ADD FOREIGN KEY (userID) REFERENCES user(IDUser)";
$q = $koneksi->query($sql);
if ($q === TRUE){
	echo "Tabel Client sukses diubah. ";
}else{
	echo "Gagal mengubah tabel. ".$koneksi->error;
}

$sql1 = "ALTER TABLE testimoni
ADD FOREIGN KEY (NIKClient) REFERENCES client(NIK)";
$q1 = $koneksi->query($sql1);
if ($q1 === TRUE){
	echo "Tabel Testimoni sukses diubah. ";
}else{
	echo "Gagal mengubah tabel. ".$koneksi->error;
}

$sql2 = "ALTER TABLE project
ADD FOREIGN KEY (IDClient) REFERENCES client(NIK)";
$q2 = $koneksi->query($sql2);
if ($q2 === TRUE){
	echo "Tabel Project sukses diubah. ";
}else{
	echo "Gagal mengubah tabel. ".$koneksi->error;
}

$sql3 = "ALTER TABLE progress
ADD FOREIGN KEY (projID) REFERENCES project(IDProj)";
$q3 = $koneksi->query($sql3);
if ($q3 === TRUE){
	echo "Tabel Project sukses diubah. ";
}else{
	echo "Gagal mengubah tabel. ".$koneksi->error;
}

$koneksi->close();
?>