<?php
include_once "usermodel.php";


$userObj = new user();
$userObj->filemanagerobj=new filemanager();
$userObj->filemanagerobj->filename="user.txt";
$userObj->filemanagerobj->separator="~";
$userObj->fullname = $_REQUEST["username"];
$userObj->email = $_REQUEST["useremail"];
$userObj->password = $_REQUEST["userpassword"];
$userObj->type = $_REQUEST["usertype"];
$userObj->adduser($userObj->filemanagerobj);
header("location:userview.php");
?>