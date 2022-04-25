<?php
// echo "The Registeration Name you fill is " .$_REQUEST["CourseName"];
// echo "The Registeration Name you fill is " .$_REQUEST["S_ID"];
// echo "The Registeration Name you fill is " .$_REQUEST["CourseID"];


$SID=$_REQUEST["S_ID"];
$reg=$_REQUEST["CourseName"];
$CID=$_REQUEST["CourseID"];
$record=$SID."~".$reg."~".$CID;
$myfile = fopen("registration.txt", "a+");
fwrite($myfile, $record."\r\n");
fclose($myfile);
header("location:ListRegistration.php");
?>