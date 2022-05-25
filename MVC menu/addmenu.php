<?php 
include_once "menumodel.php";
$userObj = new menu();
$userObj->filemanagerobj=new filemanager();
$userObj->filemanagerobj->filename="menu.txt";
$userObj->filemanagerobj->separator="~";
$userObj->name = $_REQUEST["name"];
$userObj->addmenu($userObj->filemanagerobj);
header("location:menuview.php");
?>