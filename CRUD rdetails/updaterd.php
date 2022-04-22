<?php
include "rdetailsfnc.php";
$rid=$_REQUEST["rid"];
$cid=$_REQUEST["cid"];
$sid=$_REQUEST["sid"];
$semester=$_REQUEST["semester"];

UpdateUser($rid,$cid,$sid,$semester);
header("Location: listallrd.php?Msg=1");	
?>