<html>
<body>
<?php
include "controlusersfanc.php";
$fileName="../../UsersFile.txt";
$Search=$_POST["keyword"];
$record=searchUser($fileName,$Search);
if($record!=false ||$record!=0 ){
echo "This Record :\r".$record."<br>";

if(DeleteUser($fileName,$record))
{
echo"Deleted";	
}
}
else{
    echo 'User Not Found';
}


?>

</body>
</html>

