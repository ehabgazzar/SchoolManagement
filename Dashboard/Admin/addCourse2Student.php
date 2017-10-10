<?php
$fileName='Courses.txt';
$regst='RegStudentCourse.txt';
$my="../../UsersFile.txt";


function StoreClass($fileName,$record)
{
	$myfile = fopen($fileName, "a+");
	fwrite($myfile, $record."\r\n");
	fclose($myfile);
}

function UpdateStudent($fileName,$Newrecord,$OldRecord)
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


function addCourse($Studentid,$coursename1,$coursename2,$coursename3,$coursename4,$fileName,$my,$Reg)
{



$findID=search($my,$Studentid);
$findCourse1=search($fileName,$coursename1);
$findCourse2=search($fileName,$coursename2);
$findCourse3=search($fileName,$coursename3);
$findCourse4=search($fileName,$coursename4);
$findRegStu=search($Reg,$Studentid);



if ($findID!=FALSE&&$findCourse1!=FALSE&&$findCourse2!=FALSE&&$findCourse3!=FALSE&&$findCourse4!=FALSE&&$findRegStu==FALSE)
{
	$ArrayLine=explode('~',$findID);
	$record="$Studentid"."~"."$ArrayLine[3]"."~"."$coursename1"."~"."$coursename2"."~"."$coursename3"."~"."$coursename4";
	
StoreClass($Reg,$record);	
return 'Course has been Added';
}

else if($findID!=FALSE&&$findCourse1!=FALSE&&$findCourse2!=FALSE&&$findCourse3!=FALSE&&$findCourse4!=FALSE&&$findRegStu!=FALSE)
{
	$ArrayLine=explode('~',$findID);
	$record="$Studentid"."~"."$ArrayLine[3]"."~"."$coursename1"."~"."$coursename2"."~"."$coursename3"."~"."$coursename4";
	UpdateStudent($Reg,$record,$findCourse1);
	return 'Course has been Updated';
}

else if($findID=FALSE&&$findCourse!=FALSE)
{
	return' Student Not Found';
}
else{
	return' Course Not Found';
}

}

echo addCourse($_POST["studentid"],$_POST["coursename1"],$_POST["coursename2"],$_POST["coursename3"],$_POST["coursename4"],$fileName,$my,$regst);

?>