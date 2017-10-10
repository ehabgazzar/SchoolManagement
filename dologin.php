<?php
include "UserFnc.php";

$pass=Encrypt($_REQUEST["password"],2);

if (Login($_POST["email"],$pass))
{
	//echo "Success";
	session_start();
	
	$_SESSION["email"]=$_POST["email"];
	//echo 	$_SESSION["email"];
	$x= LoginType($_POST["email"],$pass);
	
	if($x=='student')
	{
		header("Location: Dashboard/Student/index.php");
	}
	else if($x=='teacher')
	{
	 	header("Location: Dashboard/Teacher/index.php");
	
	}
	else if($x=='parent')
	{
	 	header("Location: Dashboard/Parent/index.php");
	
	}
}
else
{
	echo "False Login";
}
?>