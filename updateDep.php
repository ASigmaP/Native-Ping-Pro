<?php
include "buat_tabel.php";
if (!isset($_POST['submit'])){
	$kode_departemen = $_POST['kode_departemen'];
	$nama_departemen = $_POST['nama_departemen'];
	$id_manajer = $_POST['id_manajer'];
	$tanggal_mulai_manajer = $_POST['tanggal_mulai_manajer'];
	
	/*$sql2 = "SELECT idPegawai from pegawai WHERE nama_depan+' '+nama_belakang=$id_manajer";
	$q2 = $koneksi->query($sql2);
	$idPegawai = $q2;
	if($q2->num_rows > 0){
		        	echo "<td><select name='idPegawai'>";
		        	while($row=$q2->fetch_array()){
		        	echo "<option value='".$row['idPegawai']."'>".$row['nama_depan']." ".$row['nama_belakang']."</option>";}
		        	echo "</select></td>";
		        	$id_manajer='idPegawai';
		    	}else{
		    		echo "Data tidak ditemukan";
		    	}

	*/$sql = "UPDATE departemen SET nama_departemen='$nama_departemen', id_manajer='$id_manajer', tanggal_mulai_manajer='$tanggal_mulai_manajer' WHERE kode_departemen='$kode_departemen'";
	$q = $koneksi->query($sql);
	if ($q === FALSE){
		echo "Update Data Gagal. ".$koneksi->error;
	}else{
		header('Location: showDep.php');
	}
	
}else{
	print "Gagal";
}
$koneksi->close();
?>