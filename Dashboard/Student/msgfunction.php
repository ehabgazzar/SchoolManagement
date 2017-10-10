<?php

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
?>