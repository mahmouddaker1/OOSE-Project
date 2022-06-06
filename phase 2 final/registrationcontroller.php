  

<?php 

include_once "registrationmodel.php";
include_once "registrationview.php";

function listallregistration1()
    {
        $obj=new registration();
        $arr=$obj->listallregistration();
        return $arr;

    }
    





?>