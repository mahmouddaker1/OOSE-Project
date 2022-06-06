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