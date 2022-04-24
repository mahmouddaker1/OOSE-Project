<form action="searchrdetail.php" method="post">
registration id <input type="text" name="rid" /> <input type="image" src="download.png" align="middle"/>

</form>
<table border="1">
<tr>
	<td colspan="4"><font color=red><?php echo @$_GET["Msg"]; ?></font></td>
</tr>
<tr>
<td>registration id</td> 
<td>course id</td>    
<td>student id</td>
<td>semester</td>
<td>Delete</td>
</tr>


<?php



include "rdetailsfnc.php";
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
				echo "<td><a href=updaterd.html?rid=$Row[0]>".$Row[$j]."</a></td>";
			}
			else{
				if ($j!=4)//skip Password feild
			echo "<td>".$Row[$j]."</td>";
			}
			
			
		}
		echo "<td><a href=deleterd.php?rid=$Row[0]>X</a></td>";
		echo "</tr>";
		
	}
}

//echo "ayman ". strpos($f,"\r\n");
?>
<tr><td colspan="4" align="center"><a href="addrd.html">Add new registration</a></td></tr>
</table>
