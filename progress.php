<!DOCTYPE html>
<html>
<head>
	<title>Ping PRO | Progress</title>
	<link rel="stylesheet" href="web1.css">
</head>
<body>
	<div class="container">
		<a href="dashboard.html" class="logo">@</a>
		<div class="header">
			<ul>
				<li><a href="dashboard.html">Home</a></li>
				<li><a href="createorder.html">Create</a></li>
				<li><a href="showproject.php">Project</a></li>
				<li><a href="home.html">Logout</a></li>
				<li><a href="profile.php" class="me"></a></li>
			</ul>
		</div>
		<div class="content">
			<hr width="80%">
			<h2>List Progress</h2>
			<form name="myForm" action="showproject.php" method="post">
			<div class="showPeg">
</html>

<?php
include "koneksi.php";
	$projID = $_GET['IDProj'];
	$sql = "SELECT * FROM progress WHERE projID='$projID'";
	$q = $koneksi->query($sql);
	if($q->num_rows > 0){
	echo "<table border='1' align='center'>
	<tr>
	<th width='150px'>Status</th><th width='150px'>Tanggal Progress</th><th width='300px'>Deskripsi Progress</th>
	</tr>";
		while($baris=$q->fetch_assoc()){
			$dateProg = $baris['dateProg'];
			$status = $baris['status'];
			$deskProg = $baris['deskProg'];
			echo "<tr><td>$status</td><td>$dateProg</td><td>$deskProg</td></tr>";
		}
		echo "</table>";
	}else{
		echo "Data Tidak Ditemukan<br>";
	}
	$koneksi->close();
?>

<html>
</div>
<div class="tombol"><input type="submit" value="Back"></div>
</form>
</div>
</div>
</body>
</html>