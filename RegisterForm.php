<!DOCTYPE html>
<html>
<body>

<?php
include "UserFnc.php";


$pass=Encrypt($_REQUEST["password"],2);

if (addUser($_POST["email"],$pass,$_REQUEST["name"],$_REQUEST["acctype"]))
{
	
	
	header("Location: login.html");
	
	
	
}
else
{
	echo "Duplicate ID";
}

?>
</body>
</html>