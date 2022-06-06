<?php

include_once "menutypemodel.php";
$mobj=new menutype();
$mobj->deletemenutype($_GET["id"]);
header("location:menutypeview.php");
?>