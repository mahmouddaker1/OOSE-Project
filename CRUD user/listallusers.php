<form action="searchuser.php" method="post">
Search <input type="text" name="id" /> <input type="image" src="download.png" align="middle"/>

</form>
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
</tr>


<?php


include "userfnc.php";
session_start();
if (!isset($_SESSION["email"]))
{
	//header("Location: login.php?error=2");	
}

if (isset($_REQUEST["keyword"]))
{
//	echo "ayman".$_REQUEST["KeyWord"];
$f=getallusersbykeyword($_REQUEST["keyword"]);
}

else
{
    $f=getallusers();
}
for ($i=0;$i<count($f);$i++)
{
	$Row=explode("~",$f[$i]);
	if (count($Row)>2)
	{
		
		
		echo "<tr>";
		for ($j=0;$j<count($Row);$j++)
		{
			if ($j==1)// Generate Link
			{
				echo "<td><a href=updateUser.html?id=$Row[0]>".$Row[$j]."</a></td>";
			}
			else{
				if ($j!=3)//skip Password feild
			echo "<td>".$Row[$j]."</td>";
			}
			
			
		}
		echo "<td><a href=deleteuser.php?id=$Row[0]>X</a></td>";
		echo "</tr>";
		
	}
}

//echo "ayman ". strpos($f,"\r\n");
?>
<tr><td colspan="4" align="center"><a href="adduser.html">Add new User</a></td></tr>
</table>
