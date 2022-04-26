<?php
include_once "UserfncM.php";
$id=$_REQUEST["id"];
$Name=$_REQUEST["name"];
UpdateUser($id,$Name);
header("Location: ListMenu.php?msg=done");
?>