
<?php
include_once "registrationmodel.php";
$userObj = new registration();
$userObj->updateregistration( $_REQUEST["id"],$_REQUEST["sid"],$_REQUEST["cn"],$_REQUEST["cid"]);
header("location:registrationview.php");

?>