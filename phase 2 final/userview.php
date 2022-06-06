<html>
</form>
<h1>USERS</h1>
<form action="searchuser.php" method="post">

Search <input type="text" name="id" /> <input type="image" src="download.png" align="middle"/>

<table border="1">
<tr>
	<td colspan="4"><font color=red><?php echo @$_GET["Msg"]; ?></font></td>
</tr>
<tr>
<td>id</td>    
<td>Full Name</td>
<td>Email</td>
<td>type</td>
<td>Delete</td>
<td>update</td>
</tr>


<?php

include_once "usercontroller.php";

$arr=listallusers1();
for($i=0;$i<count($arr);$i++)
{
    
    
echo "<tr><td>".$arr[$i]->id."</td><td>".$arr[$i]->fullname."</td><td>".$arr[$i]->email."</td><td>".$arr[$i]->type."</td><td><a href=deleteuser.php?id=".$arr[$i]->id.">delete</a></td><td><a href=updateuser.html?>update</a></td></tr>";
    
}

?>
<tr>
    <td>
        <a href="adduser.html">add user<a>
</td>
</tr>

</table>
</body>
</html>