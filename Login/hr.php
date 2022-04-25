<?php
include_once "Header.php";
?>
<html>
<?php
include_once "Header.php";
if(isset($_SESSION["Email"]))
{
    echo "<br>";
    echo "<a href=listallusers.php>Edit User</a>";
    echo "<br>";
    echo "<a href=ListRegistration.php>Registration</a>";
    echo "<br>";
    echo "<a href=listallmt.php>Edit Menutype</a>";
}
else
{
    header("location:Login.html");
}
?>
    </html>
