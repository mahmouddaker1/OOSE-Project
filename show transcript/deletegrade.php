<?php
include "gradefnc.php";
$gc=$_REQUEST["gc"];
if($_REQUEST["dc"]==123)
{
deleteuser($gc);
header("Location: listallgrade.php?");	
}
else{
    header("Location: listallgrade.php?Msg=wrong deleting code");
}