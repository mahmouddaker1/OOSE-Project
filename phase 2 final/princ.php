<?php
include_once "Header.php";
?>
<html>
<?php
include_once "Header.php";
if(isset($_SESSION["Email"]))
{
    echo "<br>";
    echo "<a href=userview.php> Users</a>";
    echo "<br>";echo "<a href=registrationview.php>Registration</a>";
    
    echo "<br>";
    echo "<a href=rdetailsview.php> registration details</a>";
    echo "<br>";
    echo "<a href=ListCourses.php> course</a>";
    echo "<br>";
    echo "<a href=UserTypeView.php> usertype</a>";
    echo "<br>";
    echo "<a href=menuview.php>Menu</a>";
    echo "<br>";
    echo "<a href=menutypeview.php> Menutype</a>";
    echo "<br>";
    echo "<a href=gradeview.php> transcript</a>";
}
else
{
    header("location:Login.html");
}
?>
    </html>