  

<?php 

include_once "menutypemodel.php";
include_once "menutypeview.php";

function listallmenutype2()
    {
        $obj=new menutype();
        $arr=$obj->listallmenutype();
        return $arr;

    }
    





?>