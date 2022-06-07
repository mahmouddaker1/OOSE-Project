<?php
include_once "CourseModel.php";
$ObjFile = new FileManager();
$ObjFile->FileName = "Course.txt";
$ObjFile->Separator = ">";
$CourseObj = new Course();
$CourseObj->UpdateCourse(($_REQUEST["ID"]), $_REQUEST["UpdateName"]);
header("location:ListCourses.php");
?>