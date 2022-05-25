<html>
</form>
<h1>user type</h1>
<form action="searchusertype.php" method="post">

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
include_once "controlusertype.php";
$arr=listallusertype1();
for($i=0;$i<count($arr);$i++)
{
    
    
echo "<tr><td>".$arr[$i]->id."</td><td>".$arr[$i]->name."</td><td><a href=deleteusertype.php?id=".$arr[$i]->id.">delete</a></td><td><a href=updateusertype.html?id=".$arr[$i]->id.">update</a></td></tr>";
    
}

?>
<tr>
    <td>
        <a href="addusertype.html">add user<a>
</td>
</tr>

</table>
</body>
</html>