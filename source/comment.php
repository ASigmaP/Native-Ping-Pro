<!DOCTYPE html>
<html>
<head>
	<title>Ping PRO | Comment</title>
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
			<h2>Tell us your Responses</h2>
			<form name="myForm" action="createComment.php" method="post">
			<div class="showProj">
		    <table align="center">
		        <tbody>
		        <tr>
		            <td><textarea name="deskProg" rows="10" cols="40" required=""></textarea></td>
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