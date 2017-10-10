<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Student Dashboard</title>
		<link href="css/studentdashboard.css" rel="stylesheet">
	</head>
		<?php
session_start();
if (!isset($_SESSION["email"]))
{
	header("Location: ../../index.php");
}


?>
	<body>
		<div id="header">
			<h3>Welcome to Student Dashboard</h3>
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
		<h4 class="newshead">School news</h4>
		 <div class="newsfeed">
	       <p class="newsfeed-text">There is no news </p>
		 </div>
		</div>
	</body>
</html>
