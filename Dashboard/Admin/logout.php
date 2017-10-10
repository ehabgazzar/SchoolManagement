<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Admin Panel</title>
		<link href="css/logout.css" rel="stylesheet">
	</head>
	<body>
		<div id="header">
			<h3>Welcome to Admin Panel</h3>
		</div>
		<?php
		  include('sidebar.php')
		?>
<div id="section">
                <center><br><br>
                <form method="post" action="logoutDone.php">
                Do you really want to logout?<br><br>
                <input type="submit" name="logout" value="Continue"><br><br>
                </form>
				<form method="post" >
                <input type="submit" name="logout" value="Cancel"><br>
                </form></center>
		 </div>
		</div>
	</body>
</html>
