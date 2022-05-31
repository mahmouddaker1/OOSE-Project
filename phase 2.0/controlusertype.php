<?php 
include_once "UserTypeModel.php";
include_once "UserTypeView.php";
function listallusertype1()
    {
        $obj=new userType();
        $arr=$obj->listallusertype();
        return $arr;

    }
    

?>