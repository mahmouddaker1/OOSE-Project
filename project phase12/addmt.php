<?php
 
include "mtfnc.php";

if (adduser($_REQUEST["uid"],$_REQUEST["mid"]))
{
	echo "Success";
	header("Location: listallmt.php?Msg=Record Added Sucessfully");
}

?>