<?php
// do all file manipulations
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

function getLastId($fileName,$Separator)
{
	
	if ( !file_exists($fileName) ) {
       return 0;
      }		
	
	$myfile = fopen($fileName, "r+") or die("Unable to open file!");
	$LastId=0;
	while(!feof($myfile)) 
	{
  		$line= fgets($myfile);
  		$ArrayLine=explode($Separator,$line);
  		
  		if ($ArrayLine[0]!="")
  		{
		$LastId=$ArrayLine[0];	
		}
  		
	}
	return $LastId;
}

function StoreRecord($fileName,$record)
{
	$myfile = fopen($fileName, "a+");
	fwrite($myfile, $record."\r\n");
	fclose($myfile);
}

function searchUser($fileName,$Search)
{
	$myfile = fopen($fileName, "r+") or die("Unable to open file!");
	while(!feof($myfile)) 
	{
		$line=fgets($myfile);
		$i=strpos($line, $Search);
		
  		if ($i>=0 && $i !=null)
  		{
			
			return true;
		}
	}
	fclose($myfile);	
	return FALSE;
	
}

function searchAccountType($fileName,$Search)
{
	$myfile = fopen($fileName, "r+") or die("Unable to open file!");
	while(!feof($myfile)) 
	{
		$line=fgets($myfile);
		$i=strpos($line, $Search);
		
  		
		if($i>=0 && $i !=null && strpos($line, 'student')!== false)
		{
			return 'student';
		}
		else if($i>=0 && $i !=null && strpos($line, 'teacher')!== false)
		{
			return 'teacher';
		}
				else if($i>=0 && $i !=null && strpos($line, 'parent')!== false)
		{
			return 'parent';
		}
	}
	fclose($myfile);	
	return FALSE;
	
}
?>