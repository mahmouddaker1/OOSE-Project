<?php

include_once "rdetailsmodel.php";
$rdobj=new rdetails();
$rdobj->deleterdetails($_GET["id"]);
header("location:rdetailsview.php");
?>