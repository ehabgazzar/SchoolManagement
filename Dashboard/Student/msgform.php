<?php
include "msgfunction.php";

$myfile;
$ID;
$ID=getLastId("userMsgFile.txt","~")+1;
$record=$ID."~".$_POST["SenderMail"]."~".$_POST["RecieverMail"]."~".$_POST["comment"];

$myfile = fopen("userMsgFile.txt", "a+") or die("Unable to open file!");
	fwrite($myfile, $record."\r\n");
	fclose($myfile);
	if($myfile){echo"Success";}
	

?>