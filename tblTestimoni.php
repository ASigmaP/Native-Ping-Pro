<?php 
include "koneksi.php"; 

$sql = "CREATE TABLE testimoni ( 
IDTesti int(6) AUTO_INCREMENT PRIMARY KEY, 
testi varchar(500), 
NIKClient int(17) NOT NULL)"; 
$q = $koneksi->query($sql); 
if ($q === TRUE){ 
 echo "Tabel Testimoni sukses dibuat."; 
}else{ 
 echo "Gagal membuat tabel. ".$koneksi->error; 
} 
$koneksi->close(); 
?>