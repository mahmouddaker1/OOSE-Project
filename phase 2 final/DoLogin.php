<?php
session_start();
$Email = $_POST["Email"];
$Password = $_POST["Password"];
include_once "usermodel.php";
$FileName = "user.txt";
$OBJ = new User();
$LoginTrueOrFalse = $OBJ->Login($Email, $Password);
if($LoginTrueOrFalse == true)
{
    $_SESSION["Email"] = $Email;
    $myfile = fopen($FileName, "r+") or die("Unable to open file!");
    while(!feof($myfile))
    {
        $line = fgets($myfile);
        $ArrayLine = explode("~", $line);
        
        if($ArrayLine[4] == 1)
        {  
            header("location:princ.php");
        }
        else if($ArrayLine[4] == 2)
        {
            header("location:hr.php");
        }            
        else if($ArrayLine[4] == 3)
        {
            header("location:teacher.php");
        }
        else if($ArrayLine[4] == 4)
        {
            header("location:student.php");
        }
        else if($ArrayLine[4] == 5)
        {
            header("location:parent.php");
        }
    }   
}
else
{
    header("location:Login.html");
}
?>