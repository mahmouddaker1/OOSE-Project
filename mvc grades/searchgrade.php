<table border="1">
<tr>
	<td colspan="4"><font color=red><?php echo @$_GET["Msg"]; ?></font></td>
</tr>
<tr>
<td>id</td>    
<td>student id</td>
<td>course name</td>
<td>grade</td>
<td>Delete</td>
<td>update</td>
</tr>
<?php
include_once "grademodel.php";
$id=$_REQUEST["id"];
$obj=new grades();
$r=$obj->getgradesbyid($id);

    
echo "<tr><td>".$r->id."</td><td>".$r->sid."</td><td>".$r->cn."</td><td>".$r->grade."</td><td><a href=deletegrade.html?id=".$r->id.">delete</a></td><td><a href=updategrade.html?>update</a></td></tr>";
    

?>