<?php 
include_once "UserTypeModel.php";
$userObj = new userType();
$userObj->filemanagerobj=new filemanager();
$userObj->filemanagerobj->filename="user type.txt";
$userObj->filemanagerobj->separator="~";
$userObj->name = $_REQUEST["name"];
$userObj->addusertype($userObj->filemanagerobj);
header("location:UserTypeView.php");
?>