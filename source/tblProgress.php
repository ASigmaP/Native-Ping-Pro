<?php 
include "koneksi.php"; 

$sql = "CREATE TABLE progress ( 
IDProg int(6) AUTO_INCREMENT PRIMARY KEY, 
projID int(6) NOT NULL,
dateProg date, 
status varchar(10),
deskProg varchar(500))"; 
$q = $koneksi->query($sql); 
if ($q === TRUE){ 
 echo "Tabel Progress sukses dibuat."; 
}else{ 
 echo "Gagal membuat tabel. ".$koneksi->error; 
} 
$koneksi->close(); 
?>