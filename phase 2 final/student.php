<?php
include_once "Header.php";
?>
<html>
<?php
include_once "Header.php";
if(isset($_SESSION["Email"]))
{
    
    echo "<br>";
    echo "<a href=gradeview.php> transcript</a>";
}
else
{
    header("location:Login.html");
}
?>
    </html>