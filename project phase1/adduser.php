<?php
 
include"userfnc.php";

if (adduser($_REQUEST["fullname"],$_REQUEST["email"],$pass,$_REQUEST["type"]))
{
	echo "Success";
	header("Location: listallusers.php?Msg=Record Added Sucessfully");
}

?>