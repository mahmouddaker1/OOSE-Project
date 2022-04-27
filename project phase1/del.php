<?php
echo $_GET["rid"];
include_once "Function.php";
$rid=$_REQUEST["rid"];
deleteuser($rid);
header("Location: ListRegistration.php?Msg=Record $rid was Deleted sucessfully");
?>