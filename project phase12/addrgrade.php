<?php
 
include"gradefnc.php";
if($_REQUEST["ac"]==123)
{
if (adduser($_REQUEST["sid"],$_REQUEST["cn"],$_REQUEST["grade"]))
{
	echo "Success";
	header("Location: listallgrade.php?Msg=Record Added Sucessfully");
}
}
else{
	header("Location: listallgrade.php?Msg=wrong adding code");
}

?>