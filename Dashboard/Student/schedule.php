<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Student Dashboard</title>
		<link href="css/schedule.css" rel="stylesheet">
	</head>
		<?php
session_start();
if (!isset($_SESSION["email"]))
{
	header("Location: ../../login.html");
}
include "controlusersfanc.php";
$fileName="../Admin/ClassesTables.txt";
		$Search='1';
		$record=searchUser($fileName,$Search);
		$ArrayLine=explode('~',$record);

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
                    <td><?php echo $ArrayLine[2];?></td>
                    <td><?php echo $ArrayLine[3];?></td>        
                    <td><?php echo $ArrayLine[4];?></td>
                    <td><?php echo $ArrayLine[5];?></td>      
                    <td><?php echo $ArrayLine[6];?></td>
                    <td><?php echo $ArrayLine[7];?></td>
                </tr>
                <tr>
                    <td>Sunday</td>
                    <td><?php echo $ArrayLine[9];?></td>
                    <td><?php echo $ArrayLine[10];?></td>        
                    <td><?php echo $ArrayLine[11];?></td>
                    <td><?php echo $ArrayLine[12];?></td>      
                    <td><?php echo $ArrayLine[13];?></td>
                    <td><?php echo $ArrayLine[14];?></td>
                </tr>
                <tr>
                    <td>Monday</td>
                    <td><?php echo $ArrayLine[16];?></td>
                    <td><?php echo $ArrayLine[17];?></td>        
                    <td><?php echo $ArrayLine[18];?></td>
                    <td><?php echo $ArrayLine[19];?></td>      
                    <td><?php echo $ArrayLine[20];?></td>
                    <td><?php echo $ArrayLine[21];?></td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td><?php echo $ArrayLine[23];?></td>
                    <td><?php echo $ArrayLine[24];?></td>        
                    <td><?php echo $ArrayLine[25];?></td>
                    <td><?php echo $ArrayLine[26];?></td>      
                    <td><?php echo $ArrayLine[27];?></td>
                    <td><?php echo $ArrayLine[28];?></td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td><?php echo $ArrayLine[30];?></td>
                    <td><?php echo $ArrayLine[31];?></td>        
                    <td><?php echo $ArrayLine[32];?></td>
                    <td><?php echo $ArrayLine[23];?></td>      
                    <td><?php echo $ArrayLine[33];?></td>
                    <td><?php echo $ArrayLine[35];?></td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td><?php echo $ArrayLine[34];?></td>
                    <td><?php echo $ArrayLine[35];?></td>        
                    <td><?php echo $ArrayLine[37];?></td>
                    <td><?php echo $ArrayLine[38];?></td>      
                    <td><?php echo $ArrayLine[39];?></td>
                    <td><?php echo $ArrayLine[40];?></td>
                </tr>
        </table>

		</div>
	</body>
</html>
