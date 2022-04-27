<?php
include_once "Function.php";
$ObjFile = new FileManager();
$ObjFile->FileName = "Course.txt";
$ObjFile->Separator = ">";
$CourseObj = new Course();
$CourseObj->Name = $_POST["CourseName"];
$CourseObj->StoreCourse($ObjFile);
header("location:List.php");
?>