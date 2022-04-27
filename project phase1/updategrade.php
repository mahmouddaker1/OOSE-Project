<?php
include "gradefnc.php";
$uc=$_REQUEST["uc"];
$gc=$_REQUEST["gc"];
$sid=$_REQUEST["sid"];
$cn=$_REQUEST["cn"];
$g=$_REQUEST["grade"];
if($uc==123)
{
UpdateUser($gc,$sid,$cn,$g);
header("Location: listallgrade.php?Msg=1");	
}
else{
    header("Location: listallgrade.php?Msg=wrong updating code");	
}
?>