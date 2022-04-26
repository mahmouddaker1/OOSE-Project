<?php
include "UserFnc.php";
include_once "Functins.php";
$myfile = fopen("menu.txt","a+");
$id=getLastId("menu.txt", "~")+1;
fwrite($myfile,$id."~".$_POST["Name"]."\r\n");
fclose($myfile);
	header("Location: ListMenu.php?Msg=Record Added Sucessfully");
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