<?php
include_once "grademodel.php";

if($_REQUEST["code"]==123)
{




$gobj = new grades();
$gobj->filemanagerobj=new filemanager();
$gobj->filemanagerobj->filename="grade.txt";
$gobj->filemanagerobj->separator="~";
$gobj->sid = $_REQUEST["sid"];
$gobj->cn = $_REQUEST["cn"];
$gobj->grade = $_REQUEST["grades"];
$gobj->addgrades($gobj->filemanagerobj);
header("location:gradeview.php");
}
else{
    header("location:gradeview.php?Msg=wrong adding code");
}
?>