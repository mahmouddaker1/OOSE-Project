<?php
include_once "CourseModel.php";
$ObjFile = new FileManager();
$ObjFile->FileName = "Course.txt";
$ObjFile->Separator = ">";
$CourseObj = new Course();
$CourseObj->Name = $_POST["CourseName"];
$CourseObj->StoreCourse($ObjFile);
header("location:ListCourses.php");
?>