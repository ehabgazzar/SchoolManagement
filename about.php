<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>xeschool - About </title>
		<link href="about.css" rel="stylesheet">
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
					<p>xeSchool is an online school management System let you control <br>
					   all school resourcse without leving your seat<br><br>
					   xeschool allowing teachers to control thier courses , <br>
					   contact with thier students , manage grades and assignments  <br><br>
					   allowing parents to trach thier childs activites, attendance and grades <br><br>
					   allwoing students to contact with thier techers , take onilne quizes ,<br>
					    manage time table and more.... <br>
					</p>
				</div>
				<div class="img-section">
					<div class="img-right">
						<img src="student.png" alt=""> 
					</div>
				</div>
			</div>
		</div>
		<br><br><br><br><br><br>
		<footer>
			<div class="copyrights">
			  <p>&copy; Copyrights 2016 <a href="#">XESCHOOL</a></p>
		   </div>
		</footer>
		<script src="validate.js"></script>
	</body>
</html>

