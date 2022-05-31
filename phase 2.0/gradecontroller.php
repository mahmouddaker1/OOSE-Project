  

<?php 

include_once "grademodel.php";
include_once "gradeview.php";

function listallgrades1()
    {
        $obj=new grades();
        $arr=$obj->listallgrades();
        return $arr;

    }
    





?>