<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Admin Panel</title>
		<link href="css/settings.css" rel="stylesheet">
	</head>
	<body>
		<div id="header">
			<h3>Edit User Info</h3>
		</div>
		<?php
		include'sidebar.php';
		include "controlusersfanc.php";
                
		$fileName="../../UsersFile.txt";
		$Search=$_POST["keyword"];
		$record=searchUser($fileName,$Search);
		$ArrayLine=explode('~',$record);
		?>
		<div id="section">
                <br><br>
                <form  claas="settings" name="update-form" method="post" action="updatedone.php" >
				
				
                <b>Edit User<b><br><br>
                User ID<br>
				<input type="text" name="userid" value="<?php echo $ArrayLine[0];?>" readonly><br><br>
				Email<br>
                <input type="text" name="email" value="<?php echo $ArrayLine[1];?>"><br><br>
                Password<br>
                <input type="text" name="password" value="<?php echo Decrypt($ArrayLine[2],2);?>"><br><br>
                 Name<br>
                <input type="text" name="name" value="<?php echo $ArrayLine[3];?>"><br><br>
				 Account Type<br>
                <input type="text" name="AccType" value="<?php echo $ArrayLine[4];?>"><br><br>
               
                <input type="submit" name="edit" value="Update">
				 </form>
				<form method="post" action="users.php">
                
                <input type="submit" name="logout" value="Cancel"><br><br>
                </form> 
		</div>
		
		
	</body>
</html>
