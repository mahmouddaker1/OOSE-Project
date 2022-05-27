<?php
include_once "menutypemodel.php";


$mobj = new menutype();
$mobj->filemanagerobj=new filemanager();
$mobj->filemanagerobj->filename="menutype.txt";
$mobj->filemanagerobj->separator="~";
$mobj->uid = $_REQUEST["uid"];
$mobj->mid = $_REQUEST["mid"];
$mobj->addmenutype($mobj->filemanagerobj);
header("location:menutypeview.php");
?>