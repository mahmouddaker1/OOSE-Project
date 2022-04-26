<?php
session_start();
if(isset($_SESSION["Email"]))
{
    echo "<a href=DoLogout.php>Logout</a>";
}
else
{
    echo "<a href=Login.html>Login</a>";
}
?>
<html>
<body>
    <?php
    echo "<br>"."Welcome ".$_SESSION["Email"];
    ?>
<h1>List All Courses</h1>
<table border =1>
    <tr>
        <td>ID</td>
        <td>Course Name</td>
        <td>Delete</td>
        <td>Update</td>
    </tr>
<?php
include_once "Function.php";
$obj = new Course();
$arr = [];
$arr = $obj->ListAllCourses();
for($i=0; $i<count($arr); $i++)
{
    echo "<tr><td>".$arr[$i]->ID."</td><td><a href=CourseDetails.php?Id=".$arr[$i]->ID.">".$arr[$i]->Name."</td><td><a href=DeleteCourse.php?Id=".$arr[$i]->ID.">Delete</a></td><td><a href=UpdateCourse.html?Id=".$arr[$i]->ID.">Update</a></td></tr>";
}
?>
<tr>
    <td>
        <a href="AddCourse.html">Add Course<a>
    </td>
</tr>
<tr>
    <td>
        <a href="SearchCourse.html">Search Course<a>
    </td>
</tr>
</table>
</body>
</html>