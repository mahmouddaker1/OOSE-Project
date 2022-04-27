<?php
include "UserFncT.php";
include_once "FunctinsT.php";
$myfile = fopen("user type.txt","a+");
$id=getLastId("user type.txt", "~")+1;
fwrite($myfile,$id."~".$_POST["Name"]."\r\n");
fclose($myfile);
	header("Location: ListAllUsersType.php?Msg=Record Added Sucessfully");
/*$pass=Encrypt($_REQUEST["Password"],2);
if (addUser($_POST["Email"],$pass,$_REQUEST["FullName"],$_REQUEST["DOB"]))
{
	echo "Success";
}
else
{
	echo "Duplicate ID";
}*/
?>