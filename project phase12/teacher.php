<?php
include_once "Header.php";
?>
<html>
<?php
include_once "Header.php";
if(isset($_SESSION["Email"]))
{
    
    echo "<br>";
    echo "<a href=ListRegistration.php>Registration</a>";
    echo "<br>";
    echo "<a href=listallrd.php> registration details</a>";
    echo "<br>";
    echo "<a href=List.php> course</a>";
    
    echo "<br>";
    echo "<a href=listallgrade.php> transcript</a>";
}
else
{
    header("location:Login.html");
}
?>
    </html>