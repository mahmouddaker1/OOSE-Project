<html>
</form>
<h1>menu type</h1>
<form action="searchmenutype.php" method="post">

Search <input type="text" name="id" /> <input type="image" src="download.png" align="middle"/>

<table border="1">
<tr>
	<td colspan="4"><font color=red><?php echo @$_GET["Msg"]; ?></font></td>
</tr>
<tr>
<td>id</td>    
<td>user id</td>
<td>menu id</td>
<td>Delete</td>
<td>update</td>
</tr>


<?php

include_once "menutypecontroller.php";

$arr=listallmenutype2();
for($i=0;$i<count($arr);$i++)
{
    
    
echo "<tr><td>".$arr[$i]->id."</td><td>".$arr[$i]->uid."</td><td>".$arr[$i]->mid."</td><td><a href=deletemenutype.php?id=".$arr[$i]->id.">delete</a></td><td><a href=updatemenutype.html?>update</a></td></tr>";
    
}

?>
<tr>
    <td>
        <a href="addmenutype.html">add menutype<a>
</td>
</tr>

</table>
</body>
</html>