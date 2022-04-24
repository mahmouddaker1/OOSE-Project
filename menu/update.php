<?php
include_once "Userfnc.php";
$id=$_REQUEST["id"];
$Name=$_REQUEST["name"];
UpdateUser($id,$Name);
header("Location: ListAllUsers.php?msg=done");
?>