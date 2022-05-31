<html>
</form>
<h1>grades</h1>
<form action="searchgrade.php" method="post">

Search <input type="text" name="id" /> <input type="image" src="download.png" align="middle"/>

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

include_once "gradecontroller.php";

$arr=listallgrades1();
for($i=0;$i<count($arr);$i++)
{
    
    
echo "<tr><td>".$arr[$i]->id."</td><td>".$arr[$i]->sid."</td><td>".$arr[$i]->cn."</td><td>".$arr[$i]->grade."</td><td><a href=deletegrade.html?id=".$arr[$i]->id.">delete</a></td><td><a href=updategrade.html?>update</a></td></tr>";
    
}

?>
<tr>
    <td>
        <a href="addgrade.html">add grade<a>
</td>
</tr>

</table>
</body>
</html>