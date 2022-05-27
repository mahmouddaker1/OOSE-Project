
<?php
include_once "rdetailsmodel.php";
$rdobj = new rdetails();
$rdobj->updaterdetails( $_GET["id"],$_REQUEST["cid"],$_REQUEST["sid"],$_REQUEST["semester"],$_REQUEST["grade"]);
header("location:rdetailsview.php");

?>