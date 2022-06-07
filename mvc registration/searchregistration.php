<table border="1">
<tr>
	<td colspan="4"><font color=red><?php echo @$_GET["Msg"]; ?></font></td>
</tr>
<tr>
<td>id</td>    
<td>student id</td>
<td>course name</td>
<td>course id</td>
<td>Delete</td>
<td>update</td>
</tr>
<?php
include_once "registrationmodel.php";
$id=$_REQUEST["id"];
$obj=new registration();
$r=$obj->getregistrationbyid($id);

    
echo "<tr><td>".$r->id."</td><td>".$r->sid."</td><td>".$r->cn."</td><td>".$r->cid."</td><td><a href=deleteregistration.php?id=".$r->id.">delete</a></td><td><a href=updateregistration.html?>update</a></td></tr>";
    

?>