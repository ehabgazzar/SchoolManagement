<?php
include "Functins.php";
$fileName="UsersSettingsFile.txt";


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

?>