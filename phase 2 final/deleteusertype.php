<?php
include_once "UserTypeModel.php";
$userobj=new userType();
$userobj->deleteusertype($_GET["id"]);
header("location:UserTypeView.php");
?>