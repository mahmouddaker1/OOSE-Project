<?php
include "userfnc.php";

$id=$_REQUEST["id"];
$fullname=$_REQUEST["fullname"];
$email=$_REQUEST["email"];
$password=Encrypt($_REQUEST["password"],3);
$type=$_REQUEST["type"];
UpdateUser($id,$fullname,$email,$password,$type);
header("Location: listallusers.php?Msg=1");	
?>