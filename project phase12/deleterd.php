<?php
include "rdetailsfnc.php";
$rid=$_REQUEST["rid"];
deleteuser($rid);
header("Location: listallrd.php?Msg=Record $rid was Deleted sucessfully");	
