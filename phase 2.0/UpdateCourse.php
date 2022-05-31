<?php
include_once "CourseModel.php";
$ObjFile = new FileManager();
$ObjFile->FileName = "Course.txt";
$ObjFile->Separator = ">";
$CourseObj = new Course();
$CourseObj->Name = $_POST["UpdateName"];
$CourseObj->UpdateCourse(($_GET["Id"]), $CourseObj->Name);
header("location:ListCourses.php");
?>