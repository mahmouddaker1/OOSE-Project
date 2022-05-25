<?php
include_once "menumodel.php";
$userobj=new menu();
$userobj->deletemenu($_GET["id"]);
header("location:menuview.php");
?>