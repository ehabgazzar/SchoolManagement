<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>xeschool | Welcome</title>
		<link href="contact.css" rel="stylesheet">
	</head>
	<body>
		<div class="my-nav">
			<nav class="navbar">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
				<form  name="loginform" class="login-form" method="post"  action="dologin.php" onsubmit="return loginvalidate()">
					<input type="email" name="email" placeholder="Email">
	                <input type="password" name="password" placeholder="Password">
	                <button type="submit" name="login" value="Login" class="login-btn">Login</button>
				</form>	
			 </nav>	
		</div>
		<div class="page-content">
			<div class="text-section">
				<div class="left-text">
					<img src="logo.png" class="body-logo">
					<p>welcome to xeschool contact form<br>
					   if you have any probelm or idea , please feel free to contact us <br>
					   <br>
					</p>
				</div>
			</div>
			<div class="form-section">
				<form name="contactform" class="signup-form" action="sendmail.php" method="post" onsubmit="return sendmailvalid()">
					<h2 class="form-headline">Contact Us now !</h2><br>
						<input type="text" name="name" placeholder="Enter Your Full Name"><br>
		                <input type="email" name="email" placeholder="Enter Your Email"><br>
						<input type="text" name="subject" placeholder="Enter subject"><br>
		                <textarea type="text" name="message" placeholder="Your message here. . ." class="messagearea"></textarea><br>
		                <button type="submit" name="send" value="Send" class="send-btn"> Send </button>
				</form>
			</div>
		</div>
		<br><br><br><br><br><br>
		<footer>
			<div class="copyrights">
			  <p>&copy; Copyrights 2016 <a href="#">XESCHOOL</a></p>
		   </div>
		</footer>
		<script src="sendmail.js"></script>
	</body>
</html>

