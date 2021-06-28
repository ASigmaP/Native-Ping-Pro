<?php
include "koneksi.php";

$sql = "CREATE DATABASE pingpro";
$q = $koneksi->query($sql);
if ($q === TRUE){
	echo "Basis Data 'pingpro' sukses dibuat";
}else{
	echo "Gagal membuat basisdata 'pingpro'. ".$koneksi->error;
}
$koneksi->close();
?>