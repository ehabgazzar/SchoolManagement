<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Teacher Dashboard</title>
		<link href="css/courses.css" rel="stylesheet">
	</head>
		<?php
session_start();
if (!isset($_SESSION["email"]))
{
	header("Location: ../../login.html");
}


?>
	<body>
		<div id="header">
			<h3>My Courses</h3>
		</div>
		<div id="nav">
			<div class="logo">
				<img src="img/logo1.png" class="logo-img">
			</div>
			<ul>
				<li><a href="profile.php">* Profile</a></li>
				<li><a href="messages.php">* Messages</a></li>
				<li><a href="notifications.php">* Notifications </a></li>
				<li><a href="courses.php">* My Courses</a></li>
				<li><a href="schedule.php">* Time Table</a></li>
				<li><a href="settings.php">* Settings</a></li>
				<li><a href="logout.php">* Logout</a></li>
			</ul>
		</div>
		<div id="section">
			<br><br>
			<ul class="courses">
			    <li><a href="#">Course 1 </a></li>
  				<li><a href="#">Course 2</a></li>
  				<li><a href="#">Course 3</a></li>
			</ul>  
		</div>
	</body>
</html>
