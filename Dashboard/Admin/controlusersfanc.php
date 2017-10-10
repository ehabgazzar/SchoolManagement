<?php

function searchUser($fileName,$Search)
{
	$myfile = fopen($fileName, "r+") or die("Unable to open file!");
	while(!feof($myfile)) 
	{
		$line=fgets($myfile);
		$i=preg_match("/\b$Search\b/i", $line);
		
  		if ($i!=false||$i!=0||$i!="")
  		{
			
			return $line;
		}
	}
	fclose($myfile);	
	return FALSE;
	
}
function DeleteUser($fileName,$record)
{

	$contents = file_get_contents($fileName);

	$contents = str_replace($record,'', $contents);
	file_put_contents($fileName, $contents);
	return true;
}

function UpdateRecord($fileName,$Newrecord,$OldRecord)
{

	$contents = file_get_contents($fileName);
	
	$contents = str_replace($OldRecord,$Newrecord."\r\n",$contents);
	file_put_contents($fileName, $contents);
	echo"Updated";
}

function Decrypt($Word,$Key)
{
	$Result="";
	for ($i=0;$i<strlen($Word);$i++)
	{
		$c=chr(ord($Word[$i])-$Key-$i);
		$Result.=$c;
	}
	return $Result;
}

function Encrypt($Word,$Key)
{
	$Result="";
	for ($i=0;$i<strlen($Word);$i++)
	{
		$c=chr(ord($Word[$i])+$Key+$i);
		$Result.=$c;
	}
	return $Result;
}

?>