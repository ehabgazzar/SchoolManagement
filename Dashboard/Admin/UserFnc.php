<?php
include "Functins.php";

$fileName="../../UsersFile.txt";


function addUserSetting($Name,$Email,$Gender,$Birthday,$Address,$Mobile,$Lang)
{
global $fileName;
$id=getLastId($fileName,"~")+1;
$record=$id."~"."$Name"."~"."$Email"."~"."$Gender"."~"."$Birthday"."~"."$Address"."~"."$Mobile"."~"."$Lang";
//echo $record;
$findUser=searchUser($fileName,$Email);
if ($findUser==FALSE)
{
StoreRecord( $fileName,$record);	
return 'AddedRecord';
}
else
{
	UpdateRecord($fileName,$record,$findUser);
	return 'UpdatedRecord';
}


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

?>