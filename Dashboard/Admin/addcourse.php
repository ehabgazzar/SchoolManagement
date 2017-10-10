<?php
$fileName='Courses.txt';
$my=$_SERVER['DOCUMENT_ROOT'].'/halffainal/UsersFile.txt';


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

function search($fileName,$Search)
{
	$myfile = fopen($fileName, "r+") or die("Unable to open file!");
	while(!feof($myfile)) 
	{
		$line=fgets($myfile);
		$i=preg_match("/\b$Search\b/i", $line);
		
  		if ($i!=false||$i!=0)
  		{
			
			return $line;
		}
	}
	fclose($myfile);	
	return FALSE;
	
}


function addCourse($Teacherid,$coursename,$fileName,$my)
{



$findID=search($my,$Teacherid);
$findCourse=search($fileName,$coursename);

if ($findID!=FALSE&&$findCourse==FALSE)
{
	$ArrayLine=explode('~',$findID);
	$record="$coursename"."~"."$Teacherid"."~"."$ArrayLine[3]";
	
StoreClass($fileName,$record);	
return 'Course has been Added';
}

else if($findID!=FALSE&&$findCourse!=FALSE)
{
	$ArrayLine=explode('~',$findID);
	$record="$coursename"."~"."$Teacherid"."~"."$ArrayLine[3]";
	UpdateClass($fileName,$record,$findCourse);
	return 'Course has been Updated';
}

else
{
	return' Teacher Not Found';
}

}

echo addCourse($_POST["teacherID"],$_POST["coursename"],$fileName,$my);

?>