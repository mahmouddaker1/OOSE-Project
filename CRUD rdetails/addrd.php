<?php
 
include"rdetailsfnc.php";

if (adduser($_REQUEST["cid"],$_REQUEST["sid"],$_REQUEST["semester"]))
{
	echo "Success";
	header("Location: listallrd.php?Msg=Record Added Sucessfully");
}

?>