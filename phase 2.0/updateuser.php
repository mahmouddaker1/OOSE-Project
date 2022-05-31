
<?php
include_once "usermodel.php";
$userObj = new user();
$userObj->updateuser( $_REQUEST["id"],$_REQUEST["username"],$_REQUEST["useremail"],$_REQUEST["userpassword"],$_REQUEST["usertype"]);
header("location:userview.php");

?>