<?php
include_once "rdetailsmodel.php";
include_once "rdetailsview.php";
function listallrdetails2()
{
        $obj=new rdetails();
        $arr=$obj->listallrdetails();
        return $arr;
}

?>