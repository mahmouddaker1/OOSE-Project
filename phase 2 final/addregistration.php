<?php
include_once "registrationmodel.php";


$userObj = new registration();
$userObj->filemanagerobj=new filemanager();
$userObj->filemanagerobj->filename="registration.txt";
$userObj->filemanagerobj->separator="~";
$userObj->sid = $_REQUEST["sid"];
$userObj->cn = $_REQUEST["cn"];
$userObj->cid = $_REQUEST["cid"];

$userObj->addregistration($userObj->filemanagerobj);
header("location:registrationview.php");
?>