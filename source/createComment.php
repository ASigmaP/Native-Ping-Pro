<?php
include "koneksi.php";
session_start();
$projID = $_SESSION["projID"];
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	$deskProg = trim($_POST['deskProg']);
	$dateProg = date("Y/m/d");
}
$sql1 = "INSERT INTO progress (IDProg, projID, dateProg, status, deskProg) VALUES ('', '$projID', '$dateProg', 'REPLY', '$deskProg')";
$q1 = $koneksi->query($sql1);
if ($q1 === FALSE){
	echo "Create progress gagal".$koneksi->error;
}else{
	echo "<script>window.location='progress.php? IDProj=$projID'</script>";
}
?>