<?php
// do all file manipulations
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
function UpdateRecord($fileName,$Newrecord,$OldRecord)
{

	$contents = file_get_contents($fileName);
//replace recrd with null in content
	$contents = str_replace($OldRecord,$Newrecord, $contents);
	file_put_contents($fileName, $contents);
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
  			
			return $line;
		}
	}
	fclose($myfile);	
	return FALSE;
	
}
?>