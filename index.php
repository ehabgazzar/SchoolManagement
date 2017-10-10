<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>xeschool | Welcome</title>
		<link href="index.css" rel="stylesheet">
	</head>
	<body>
		<div class="my-nav">
			<nav class="navbar">
				<ul>
					<li><a href="#">Home</a></li>
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
					<p>Lorem Ipsum is simply dummy text of the printing<br>
					   industry. Lorem Ipsum has been the industry's standard <br>
					   Lorem Ipsum is simply dummy text of the printing.<br>
					</p>
				</div>
			</div>
			<!--
			<div class="form-section">
				<form name="signupform" class="signup-form" action="RegisterForm.php" method="post" onsubmit="return signupvalidate()">
					<h2 class="form-headline">Don't have an Account ?</h2><br>
						<input type="text" name="name" placeholder="Enter Your Full Name"><br>
		                <input type="email" name="email" placeholder="Enter Your Email"><br>
		                <input type="password" name="password" placeholder="Create Password"><br>
		                 <text class="form-text">Account Type : </text>
		                <select name="acctype">
							<option class="option" value=""></option>
							<option class="option" value="student">Student</option>
						   <option class="option" value="teacher">Teacher</option>
						   <option class="option" value="parent">Parent</option>
						</select><br>
		                <button type="submit" name="login" value="Login" class="signup-btn">Signup</button>
				</form>
			</div>
			-->
		</div>
		<br><br><br><br>
		<footer>
			<div class="copyrights">
			  <p>&copy; Copyrights 2016 <a href="#">XESCHOOL</a></p>
		   </div>
		</footer>
		<script src="validate.js"></script>
	</body>
</html>

