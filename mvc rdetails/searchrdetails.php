<table border="1">
<tr>
	<td colspan="4"><font color=red><?php echo @$_GET["Msg"]; ?></font></td>
</tr>
<tr>
<td>id</td>    
<td>course id</td>
<td>student id</td>
<td>semester</td>
<td>grade</td>
<td>Delete</td>
</tr>
<?php
include_once "rdetailsmodel.php";
$id=$_REQUEST["id"];
$obj=new rdetails();
$r=$obj->getrdetailsbyid($id);

echo "<tr><td>".$r->id."</td><td>".$r->cid."</td><td>".$r->sid."</td><td>".$r->semester."</td><td>".$r->grade."</td><td><a href=deleterdetails.php?id=".$r->id.">delete</a></td><td><a href=updaterdetails.html?>update</a></td></tr>";
    

?>