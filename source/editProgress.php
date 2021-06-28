<!DOCTYPE html>
<html>
<head>
	<title>Ping PRO | Create</title>
	<link rel="stylesheet" href="web1.css">
</head>
<body>
	<div class="container">
		<a href="homeAdm.html" class="logo">@</a>
		<div class="header">
			<ul>
				<li><a href="homeAdm.html">Home</a></li>
				<li><a href="allProject.php">Project</a></li>
				<li><a href="allClient.php">Client</a></li>
				<li><a href="home.html">Logout</a></li>
				<li><a href="key.php" class="key"></a></li>
			</ul>
		</div>
		<div class="content">
			<hr width="80%">
			<h2>Share your problem with us...</h2>
			<form name="myForm" action="createProgress.php" method="post">
			<div class="homeTab">
		    <table>
		        <tbody>
		        <tr>
		            <td>Status Project</td>
		            <td>:</td>
		            <td><select name="status">
		            	<option value="CREATED">CREATED</option>
		            	<option value="ON PROCESS">ON PROCESS</option>
		            	<option value="FREEZE">FREEZE</option>
		            	<option value="DROP">DROP</option>
		            	<option value="DONE">DONE</option>
		            </select></td>
		        </tr>
		        <tr>
		            <td valign="top">Progress</td>
		            <td valign="top">:</td>
		            <td><textarea name="deskProg" rows="10" cols="27" required=""></textarea></td>
		        </tr>
		    </tbody>
		    </table>
		</div>
		    <input type="submit" value="Send">
		    <input type="reset" value="Reset">
			</form>
		</div>
	</div>
</body>
</html>