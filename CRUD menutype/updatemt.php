<?php
include "mtfnc.php";
$mtid=$_REQUEST["mtid"];
$uid=$_REQUEST["uid"];
$mid=$_REQUEST["mid"];
UpdateUser($mtid,$uid,$mid);
header("Location: listallmt.php?Msg=1");	
?>