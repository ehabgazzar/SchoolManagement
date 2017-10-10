<html>
<body>
<?php
include "controlusersfanc.php";
$fileName="ClassesTables.txt";

$Search=$_POST["keyword"];
$record=searchUser($fileName,$Search);
if($record!=false ||$record!=0 ){
echo "This Table :\r".$record."<br>";

if(DeleteUser($fileName,$record))
{
echo"is Deleted";	
}

}
else{
    echo 'Table Not Found';
}



?>

</body>
</html>

