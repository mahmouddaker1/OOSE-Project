<?php
include_once "UserfncM.php";
include_once "FunctinsM.php";
//DeleteRecord("user type.txt", $_REQUEST["id"]) 
$id=$_REQUEST["id"];
DeleteUser($id);
header("Location: ListMenu.php?Msg=Record $id was Deleted sucessfully");
?>