<?php 
include_once "CourseModel.php";
include_once "ListCourses.php";
$obj = new Course();
$arr = [];
$arr = $obj->ListAllCourses();
for($i=0; $i<count($arr); $i++)
{
    echo "<tr><td>".$arr[$i]->ID."</td><td><a href=CourseDetails.php?Id=".$arr[$i]->ID.">".$arr[$i]->Name."</td><td><a href=DeleteCourse.php?Id=".$arr[$i]->ID.">Delete</a></td><td><a href=UpdateCourse.html?Id=".$arr[$i]->ID.">Update</a></td></tr>";
}
?>