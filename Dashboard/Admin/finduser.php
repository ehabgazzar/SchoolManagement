<?php
include "controlusersfanc.php";

$fileName=$fileName="../../UsersFile.txt";
$Search=$_POST["keyword"];

$record=searchUser($fileName,$Search);
if($record!=false ||$record!=0 ){
echo "This Record :\r".$record."<br>"."Found"."<br>";
}
else{
	echo "Not Found";
}


?>