<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Admin Panel</title>
		<link href="css/messages.css" rel="stylesheet">
		
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
			<h3>Messages</h3>
		</div>
		<?php
		  include('sidebar.php')
		?>
		<div id="section">
			<br><br>
						<form name="sendmsg" action="msgform.php" method="post" class="send-msg" onsubmit="return sendmsgvalid()">
                          <input type="text" name="SenderMail" placeholder="Enter your email"><br><br>
						  <input type="text" name="RecieverMail" placeholder="Enter reciver email">
                        <br><br>
                        <input type="text" name="subject" placeholder="Subject"><br><br>
                        <textarea name="comment" rows="10" cols="40" placeholder="Your Message" class="msg-area"></textarea><br><br>
                        <button type="submit" name="message" value="Submit" class="send-msg-btn">Send message</button>
                        </form>

		</div>
		<script src="sendmsgvalid.js"></script>
	</body>
</html>
