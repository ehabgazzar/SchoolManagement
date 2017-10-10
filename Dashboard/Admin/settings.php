<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Admin Panel</title>
		<link href="css/settings.css" rel="stylesheet">
	</head>
	<body>
		<div id="header">
			<h3>Settings</h3>
		</div>
		<?php
		  include('sidebar.php')
		?>
		<div id="section">
                <br><br>
                <form  claas="settings" name="settings-form" method="post" action="RegisterForm2.php" onsubmit="return settingsvalid()">
				
				
                <b>Edit Your Profile Data<b><br><br>
                Full Name<br>
                <input type="text" name="name" placeholder="Enter Your Full Name"><br><br>
				Email<br>
                <input type="text" name="email" placeholder="Enter Your Email"><br><br>
                Gender<br>
                <input type="radio" name="gender" value="female">Female<br>
                <input type="radio" name="gender" value="male">Male<br><br>
                Birthday<br>
                <input type="text" name="birthday" placeholder="Birthday mm/day/year"><br><br>
                Address<br>
                <input type="text" name="address" placeholder="Enter Your Address"><br><br>
                Mobile No<br>
                <input type="text" name="mobile" placeholder="Enter Your Mobile Number"><br><br>
                Language<br>
                <input type="radio" name="lang" value="English">English<br>
                <input type="radio" name="lang" value="Arabic">Arabic<br><br>
                <input type="submit" name="edit" value="Save Settings">
                </form> 
		</div>
		<script src="settings.js"></script>
		
	</body>
</html>
