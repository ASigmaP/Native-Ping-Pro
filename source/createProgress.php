<?php
include "koneksi.php";
session_start();
$projID = $_SESSION["projID"];
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	$status = trim($_POST['status']);
	$deskProg = trim($_POST['deskProg']);
	$dateProg = date("Y/m/d");
}
$sql1 = "INSERT INTO progress (IDProg, projID, dateProg, status, deskProg) VALUES ('', '$projID', '$dateProg', '$status', '$deskProg')";
$q1 = $koneksi->query($sql1);
if ($q1 === FALSE){
	echo "Create progress gagal".$koneksi->error;
}else{
	echo "<script>window.location='progressAdm.php? IDProj=$projID'</script>";
}
?>