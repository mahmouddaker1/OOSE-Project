  

<?php 

include_once "usermodel.php";
include_once "userview.php";

function listallusers1()
    {
        $obj=new user();
        $arr=$obj->listallusers();
        return $arr;

    }
    





?>