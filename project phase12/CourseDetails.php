<?php
include_once "Function.php";
$OBj = new Course();
$MyOBJ = $OBj->GetCourseFromFileByID($_GET["Id"]);
echo $MyOBJ->ID."<br>";
echo $MyOBJ->Name."<br>";
?>