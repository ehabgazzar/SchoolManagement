<?php
include "controlusersfanc.php";

$fileName="../../UsersFile.txt";
$pass=Encrypt($_POST["password"],2);
$Newrecord=$_POST["userid"]."~".$_POST["email"]."~".$pass."~".$_POST["name"]."~".$_POST["AccType"];
$record=searchUser($fileName,$_POST["email"]);

UpdateRecord($fileName,$Newrecord,$record);

?>