<?php
include "userfnc.php";
$id=$_REQUEST["id"];
deleteuser($id);
header("Location: listallusers.php?Msg=Record $id was Deleted sucessfully");	
