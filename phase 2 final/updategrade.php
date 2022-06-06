
<?php
include_once "grademodel.php";
if($_REQUEST["code"]==123)

{
$gobj = new grades();
$gobj->updategrades( $_REQUEST["id"],$_REQUEST["sid"],$_REQUEST["cn"],$_REQUEST["grade"]);
header("location:gradeview.php");

}
else{
    header("location:gradeview.php?Msg=wrong updating code");
}
?>