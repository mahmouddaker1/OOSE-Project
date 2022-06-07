<html>
</form>
<h1>registration</h1>
<form action="searchregistration.php" method="post">

Search <input type="text" name="id" /> <input type="image" src="download.png" align="middle"/>

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

include_once "registrationcontroller.php";

$arr=listallregistration1();
for($i=0;$i<count($arr);$i++)
{
    
    
echo "<tr><td>".$arr[$i]->id."</td><td>".$arr[$i]->sid."</td><td>".$arr[$i]->cn."</td><td>".$arr[$i]->cid."</td><td><a href=deleteregistration.php?id=".$arr[$i]->id.">delete</a></td><td><a href=updateregistration.html?>update</a></td></tr>";
    
}

?>
<tr>
    <td>
        <a href="addregistration .html">add registration<a>
</td>
</tr>

</table>
</body>
</html>