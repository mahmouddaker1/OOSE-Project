<?php
include_once "menumodel.php";
$userObj = new menu();
$userObj->updatemenu( $_GET["id"],$_REQUEST["name"]);
header("location:menuview.php");
?>