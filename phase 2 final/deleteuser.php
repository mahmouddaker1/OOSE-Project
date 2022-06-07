<?php

include_once "usermodel.php";
$userobj=new user();
$userobj->deleteuser($_GET["id"]);
header("location:userview.php");
?>