  

<?php 

include_once "rdetailsmodel.php";


$rdObj = new rdetails();
$rdObj->filemanagerobj=new filemanager();
$rdObj->filemanagerobj->filename="rdetails.txt";
$rdObj->filemanagerobj->separator="~";
$rdObj->cid = $_REQUEST["cid"];
$rdObj->sid = $_REQUEST["sid"];
$rdObj->semester = $_REQUEST["semester"];
$rdObj->grade = $_REQUEST["grade"];
$rdObj->addrdetails($rdObj->filemanagerobj);
header("location:rdetailsview.php");

?>