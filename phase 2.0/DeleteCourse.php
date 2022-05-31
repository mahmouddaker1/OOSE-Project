<?php
include_once "CourseModel.php";
$OBj = new Course();
$OBj->DeleteCourse($_GET["Id"]);
header("location:ListCourses.php");
?>