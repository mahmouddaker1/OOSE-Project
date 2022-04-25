<?php
echo $_GET["Student_ID"];
include_once "Function.php";
$RegObj=new Registration();
$RegObj->deleteRegistration($_GET["Student_ID"]);

?>