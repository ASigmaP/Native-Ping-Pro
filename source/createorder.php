<?php
include "koneksi.php";
session_start();
$IDClient = $_SESSION["NIK"];
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	$nmProj = trim($_POST['nmProj']);
	$domain = trim($_POST['domain']);
	$targetProj = trim($_POST['targetProj']);
	$tujuanProj = trim($_POST['tujuanProj']);
	$fiturProj = trim($_POST['fiturProj']);
	$protoProj = trim($_POST['protoProj']);
	$dateProj = date("Y/m/d");
}
$sql1 = "INSERT INTO project (IDProj, dateProj, nmProj, domain, targetProj, tujuanProj, fiturProj, protoProj, IDClient) VALUES ('', '$dateProj', '$nmProj', '$domain', '$targetProj', '$tujuanProj', '$fiturProj', '$protoProj', '$IDClient')";
$q1 = $koneksi->query($sql1);
if ($q1 === FALSE){
	echo "Create project gagal".$koneksi->error;
}

$sql2 = "SELECT * FROM project WHERE nmProj='$nmProj' && IDClient='$IDClient'";
	$q2 = $koneksi->query($sql2);
	if($q2->num_rows > 0){
	while($baris2=$q2->fetch_array()){
		$projID = $baris2['IDProj'];
		}
	}

$sql = "INSERT INTO progress (IDProg, projID, status, dateProg, deskProg) VALUES ('', '$projID', 'CREATED', '$dateProj', 'Pesanan berhasil dibuat.')";
$q = $koneksi->query($sql);
if ($q === FALSE){
	echo "Create progress gagal".$koneksi->error;
}else{
	echo "<script>window.location='showProject.php'</script>";
}
?>