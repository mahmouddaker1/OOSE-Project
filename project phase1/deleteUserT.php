<?php
include_once "UserfncT.php";
include_once "FunctinsT.php";
//DeleteRecord("user type.txt", $_REQUEST["id"]) 
$id=$_REQUEST["id"];
DeleteUser($id);
header("Location: ListAllUsersType.php?Msg=Record $id was Deleted sucessfully");
?>