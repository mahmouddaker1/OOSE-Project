<html>
</form>
<h1>registration details</h1>
<form action="searchrdetails.php" method="post">

Search <input type="text" name="id" /> <input type="image" src="download.png" align="middle"/>

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
<td>update</td>
</tr>


<?php
include_once "rdetailscontroller.php";


$arr=listallrdetails2();
for($i=0;$i<count($arr);$i++)
{
    
    
echo "<tr><td>".$arr[$i]->id."</td><td>".$arr[$i]->cid."</td><td>".$arr[$i]->sid."</td><td>".$arr[$i]->semester."</td><td>".$arr[$i]->grade."</td><td><a href=deleterdetails.php?id=".$arr[$i]->id.">delete</a></td><td><a href=updaterdetails.html?>update</a></td></tr>";
    
}

?>
<tr>
    <td>
        <a href="addrdetails.html">add rdetails<a>
</td>
</tr>

</table>
</body>
</html>