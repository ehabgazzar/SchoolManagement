<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Admin Panel</title>
		<link href="css/users.css" rel="stylesheet">
	</head>
	<body>
		<div id="header">
			<h3>Users control panel</h3>
		</div>
		<?php
		  include('sidebar.php')
		?>
		<div id="section">
           <form name="Searchform" action="finduser.php" method="POST">
            Search User <input type="text" name="keyword">
             <input type="submit" value="search" name="search"></>
			 
           </form>
		    <form name="Updateform" action="update.php" method="POST">
            Update User <input type="text" name="keyword">
             <input type="submit" value="search" name="search"></>
			 
           </form>
		   
		    <form name="Deleteform" action="delete.php" method="POST">
            Delete User <input type="text" name="keyword">
             <input type="submit" value="Delete" name="delete" ></>
			 
           </form>
           <div class="form-section">
				<form name="signupform" class="signup-form" action="RegisterForm.php" method="post" onsubmit="return signupvalidate()">
					<h2 class="form-headline">Add a new user</h2><br>
						<input type="text" name="name" placeholder="Enter Full Name"><br>
		                <input type="email" name="email" placeholder="Enter User Email"><br>
		                <input type="password" name="password" placeholder="Create Password"><br>
		                 <text class="form-text">Account Type : </text>
		                <select name="acctype">
							<option class="option" value=""></option>
                                                        <option class="option" value="admin">Admin</option>
							<option class="option" value="student">Student</option>
						   <option class="option" value="teacher">Teacher</option>
						   <option class="option" value="parent">Parent</option>
						</select><br>
		                <button type="submit" name="login" value="Login" class="signup-btn">Add User</button>
				</form>
			</div>
		   
		</div>
		<script src="validate.js"></script>
	</body>
</html>
