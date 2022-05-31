
<?php
include_once "menutypemodel.php";
$mobj = new menutype();
$mobj->updatemenutype( $_REQUEST["id"],$_REQUEST["uid"],$_REQUEST["mid"]);
header("location:menutypeview.php");

?>