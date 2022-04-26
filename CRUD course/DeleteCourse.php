<?php
include_once "Function.php";
$OBj = new Course();
$OBj->DeleteCourse($_GET["Id"]);
header("location:List.php");
?>