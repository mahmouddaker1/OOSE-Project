<?php
include_once "UserTypeModel.php";
$userObj = new userType();
$userObj->updateusertype( $_GET["id"],$_REQUEST["name"]);
header("location:UserTypeView.php");
?>