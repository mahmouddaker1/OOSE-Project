
<table border="1">
<tr>
	<td colspan="4"><font color=red><?php echo @$_GET["Msg"]; ?></font></td>
</tr>
<tr>
<td>id</td>    
<td>course name</td>
<td>delete</td>
<td>update</td>

</tr>
<?php
include_once "CourseModel.php";
$id=$_REQUEST["id"];
$CourseObj = new Course();
$MyOBJ = $CourseObj->GetCourseFromFileByID( $id);
echo "<tr><td>".$MyOBJ->ID."</td><td>".$MyOBJ->Name."</td><td><a href=DeleteCourse.php?Id=".$MyOBJ->ID.">delete</a></td><td><a href=UpdateCourse.html?>update</a></td></tr>";
    

?>