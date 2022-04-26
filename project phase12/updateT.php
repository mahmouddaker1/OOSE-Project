<?php
include_once "UserfncT.php";
$id=$_REQUEST["id"];
$Name=$_REQUEST["name"];
UpdateUser($id,$Name);
header("Location: ListAllUsersType.php?msg=done");
?>