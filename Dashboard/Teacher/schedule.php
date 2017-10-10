<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Teacher Dashboard</title>
		<link href="css/schedule.css" rel="stylesheet">
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
			<h3>Time Table</h3>
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
			<table style="width:100%">
                <tr>
                    <th>Days / Lectures</th>
                    <th>Lecture1</th>
                    <th>Lecture2</th>		
                    <th>Lecture3</th>
                    <th>Lecture4</th>
                    <th>Lecture5</th>
                    <th>Lecture6</th>
                </tr>
                <tr>
                    <td>Saturday</td>
                    <td>Class1</td>
                    <td>Class2</td>        
                    <td>Class3</td>
                    <td>Class4</td>      
                    <td>Class5</td>
                    <td>Class6</td>
                </tr>
                <tr>
                    <td>Sunday</td>
                    <td>Class1</td>
                    <td>Class2</td>        
                    <td>Class3</td>
                    <td>Class4</td>      
                    <td>Class5</td>
                    <td>Class6</td>
                </tr>
                <tr>
                    <td>Monday</td>
                    <td>Class1</td>
                    <td>Class2</td>        
                    <td>Class3</td>
                    <td>Class4</td>      
                    <td>Class5</td>
                    <td>Class6</td>
                </tr>
                <tr>
                    <td>Teusday</td>
                    <td>Class1</td>
                    <td>Class2</td>        
                    <td>Class3</td>
                    <td>Class4</td>      
                    <td>Class5</td>
                    <td>Class6</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>Class1</td>
                    <td>Class2</td>        
                    <td>Class3</td>
                    <td>Class4</td>      
                    <td>Class5</td>
                    <td>Class6</td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td>Class1</td>
                    <td>Class2</td>        
                    <td>Class3</td>
                    <td>Class4</td>      
                    <td>Class5</td>
                    <td>Class6</td>
                </tr>
        </table>
		</div>
	</body>
</html>
