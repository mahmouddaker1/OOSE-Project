<?php
include "mtfnc.php";
$mtid=$_REQUEST["mtid"];
deleteuser($mtid);
header("Location: listallmt.php?Msg=Record $mtid was Deleted sucessfully");	
