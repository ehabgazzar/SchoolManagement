<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Admin Panel</title>
		<link href="css/messages.css" rel="stylesheet">
	</head>
	<body>
		<div id="header">
			<h3>Messages</h3>
		</div>
		<?php
		  include('sidebar.php')
		?>
		<div id="section">
			<br><br>
			<ul class="messages">
			    <li><a href="#">Inbox(#)</a></li>
  				<li><a href="sendmsg.php">Send Message</a></li>
			</ul>
		</div>
	</body>
</html>
