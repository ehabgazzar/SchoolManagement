<?php
include "Functins.php";
$fileName="UsersFile.txt";

function Login ($Email,$Password)
{
	global $fileName;
	if (searchUser($fileName,$Email."~".$Password))
	{
		return true;
	}
	else{
		return false;
	}
}

function LoginType ($Email,$Password)
{
	global $fileName;
	$a=searchAccountType($fileName,$Email."~".$Password);
	
	return $a;
	
	
}

function addUser($Email,$Password,$FullName,$acctype)
{
global $fileName;
$id=getLastId($fileName,"~")+1;
$record=$id."~".$Email."~".$Password."~".$FullName."~".$acctype;
//echo $record;
if (searchUser($fileName,$Email)==FALSE)
{
StoreRecord( $fileName,$record);	
return true;
}
else
{
	return FALSE;
}


}


function DeleteRecord($fileName,$record)
{

	$contents = file_get_contents($fileName);
//replace recrd with null in content
	$contents = str_replace($record."\r\n", '', $contents);
	file_put_contents($fileName, $contents);
}

?>