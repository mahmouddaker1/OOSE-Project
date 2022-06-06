<?php

include_once "grademodel.php";
if($_REQUEST["code"]==123)
{
$gobj=new grades();
$gobj->deletegrades($_GET["id"]);
header("location:gradeview.php");
}
else{
    header("location:gradeview.php?Msg=wrong deleting code");
}
?>