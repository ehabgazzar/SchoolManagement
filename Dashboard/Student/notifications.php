<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Student Dashboard</title>
		<link href="css/notifications.css" rel="stylesheet">
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
			<h3>Notifications</h3>
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
			<p class="sectionparagraph">"Your grades uploaded"</p>
			<p class="sectionparagraph">"You have an asssignment to do before 20/20/2020 "</p>
			<p class="sectionparagraph">"Your Schedule Uploaded"</p>
		</div>
	</body>
</html>
