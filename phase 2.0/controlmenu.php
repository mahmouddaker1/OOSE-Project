 <?php 
include_once "menumodel.php";
include_once "menuview.php";
function listallmenu1()
    {
        $obj=new menu();
        $arr=$obj->listallmenu();
        return $arr;

    }
    

?>