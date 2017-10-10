<?php
$fileName='ClassesTables.txt';



function StoreClass($fileName,$record)
{
	$myfile = fopen($fileName, "a+");
	fwrite($myfile, $record."\r\n");
	fclose($myfile);
}

function UpdateClass($fileName,$Newrecord,$OldRecord)
{

	$contents = file_get_contents($fileName);
//replace recrd with null in content
	$contents = str_replace($OldRecord,$Newrecord."\r\n", $contents);
	file_put_contents($fileName, $contents);
}

function searchClass($fileName,$Search)
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


function addClass($id,$salec1,$salec2,$salec3,$salec4,$salec5,$salec6,$sulec1,$sulec2,$sulec3,$sulec4,$sulec5,$sulec6,$molec1,$molec2,$molec3,
$molec4,$molec5,$molec6,$telec1,$telec2,$telec3,$telec4,$telec5,$telec6,$welec1,$welec2,$welec3,$welec4,$welec5,$welec6,
$thlec1,$thlec2,$thlec3,$thlec4,$thlec5,$thlec6)
{
global $fileName;

$record=$id."~"."Sa"."~"."$salec1"."~"."$salec2"."~"."$salec3"."~"."$salec4"."~"."$salec5"."~"."$salec6"."~".
"Su"."~"."$sulec1"."~"."$sulec2"."~"."$sulec3"."~"."$sulec4"."~"."$sulec5"."~"."$sulec6"."~".
"Mo"."~"."$molec1"."~"."$molec2"."~"."$molec3"."~"."$molec4"."~"."$molec5"."~"."$molec6"."~".
"Tu"."~"."$telec1"."~"."$telec2"."~"."$telec3"."~"."$telec4"."~"."$telec5"."~"."$telec6"."~".
"We"."~"."$welec1"."~"."$welec2"."~"."$welec3"."~"."$welec4"."~"."$welec5"."~"."$welec6"."~".
"Th"."~"."$thlec1"."~"."$thlec2"."~"."$thlec3"."~"."$thlec4"."~"."$thlec5"."~"."$thlec6";
//echo $record;
$findClass=searchClass($fileName,$id);

if ($findClass==FALSE)
{
StoreClass( $fileName,$record);	
return 'Table has been Added';
}
else
{
	UpdateClass($fileName,$record,$findClass);
	return 'Table has been Updated';
}


}

echo addClass($_POST["id"],$_POST["salec1"],$_POST["salec2"],$_POST["salec3"],$_POST["salec4"],$_POST["salec5"],$_POST["salec6"],
$_POST["sulec1"],$_POST["sulec2"],$_POST["sulec3"],$_POST["sulec4"],$_POST["sulec5"],$_POST["sulec6"],
$_POST["molec1"],$_POST["molec2"],$_POST["molec3"],$_POST["molec4"],$_POST["molec5"],$_POST["molec6"],
$_POST["telec1"],$_POST["telec2"],$_POST["telec3"],$_POST["telec4"],$_POST["telec5"],$_POST["telec6"],
$_POST["welec1"],$_POST["welec2"],$_POST["welec3"],$_POST["welec4"],$_POST["welec5"],$_POST["welec6"],
$_POST["thlec1"],$_POST["thlec2"],$_POST["thlec3"],$_POST["thlec4"],$_POST["thlec5"],$_POST["thlec6"]);

?>