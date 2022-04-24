<?php
include_once "Userfnc.php";
include_once "Functins.php";
//DeleteRecord("user type.txt", $_REQUEST["id"]) 
$id=$_REQUEST["id"];
DeleteUser($id);
header("Location: ListAllUsers.php?Msg=Record $id was Deleted sucessfully");
?>