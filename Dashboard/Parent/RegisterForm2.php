<?php
include "UserFnc.php";



 echo addUserSetting($_POST["name"],$_POST["email"],$_POST["gender"],$_POST["birthday"],$_POST["address"],$_POST["mobile"],$_POST["lang"]);


?>