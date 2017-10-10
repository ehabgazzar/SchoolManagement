<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Admin Panel</title>
		<link href="css/staff.css" rel="stylesheet">
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
			<h3>Staff</h3>
		</div>
		<div id="nav">
			<div class="logo">
				<img src="img/logo1.png" class="logo-img">
			</div>
			<ul>
							<li><a href="adminprofile.php">* Admin Profile</a></li>
				<li><a href="messages.php">* Messages</a></li>
				<li><a href="notifications.php">* Notifications </a></li>
				<li><a href="schedules.php">* Classes Schedules</a></li>
				<li><a href="staff.php">* Staff</a></li>
				<li><a href="teachers.php">* Teachers</a></li>
				<li><a href="students.php">* Students</a></li>
				<li><a href="parents.php">* Parents</a></li>
				<li><a href="labs.php">* Labs</a></li>
				<li><a href="library.php">* Library</a></li>
				<li><a href="accounting.php">* Accounting</a></li>
				<li><a href="stocks.php">* Stocks</a></li>
				<li><a href="reports.php">* Reports</a></li>
				<li><a href="settings.php">* Settings</a></li>
				<li><a href="logout.php">* Logout</a></li>
			</ul>
		</div>
		<div id="section">
		</div>
	</body>
</html>
