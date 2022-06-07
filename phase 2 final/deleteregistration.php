<?php

include_once "registrationmodel.php";
$userobj=new registration();
$userobj->deleteregistration($_GET["id"]);
header("location:registrationview.php");
?>