<html>
</form>
<h1>menu</h1>
<form action="searchmenu.php" method="post">

Search <input type="text" name="id" /> <input type="image" src="download.png" align="middle"/>

<table border="1">
<tr>
	<td colspan="4"><font color=red><?php echo @$_GET["Msg"]; ?></font></td>
</tr>
<tr>
<td>id</td>    
<td>Name</td>
</tr>


<?php
include_once "controlmenu.php";

$arr=listallmenu1();
for($i=0;$i<count($arr);$i++)
{
    
    
echo "<tr><td>".$arr[$i]->id."</td><td>".$arr[$i]->name."</td><td><a href=deletemenu.php?id=".$arr[$i]->id.">delete</a></td><td><a href=updatemenu.html?id=".$arr[$i]->id.">update</a></td></tr>";
    
}

?>
<tr>
    <td>
        <a href="addmenu.html">add user<a>
</td>
</tr>

</table>
</body>
</html>