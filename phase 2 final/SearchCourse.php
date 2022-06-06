<?php
include_once "CourseModel.php";
$ObjFile = new FileManager();
$ObjFile->FileName = "Course.txt";
$ObjFile->Separator = ">";
$CourseObj = new Course();
$CourseObj->Name = $_POST["SearchCourse"];
$MyOBJ = $CourseObj->SearchCourse($ObjFile->FileName, $CourseObj->Name);
echo $MyOBJ->ID."<br>";
echo $MyOBJ->Name."<br>";
?>