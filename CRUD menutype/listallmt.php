<form action="searchmt.php" method="post">
menutype id <input type="text" name="mtid" /> <input type="image" src="download.png" align="middle"/>

</form>
<table border="1">
<tr>
	<td colspan="4"><font color=red><?php echo @$_GET["Msg"]; ?></font></td>
</tr>
<tr>
<td>menutype id</td> 
<td>user id</td>    
<td>menu id</td>

</tr>


<?php

echo sha1("Ayman11978");
echo "<br>";
echo sha1("2");
echo "<br>";
echo md5("2");
/*
echo sha1("1_30pm122_3_2016");
echo "<br>";
echo sha1("2");
echo "<br>";
echo md5("2");
*/
include "mtfnc.php";
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
				echo "<td><a href=updatemt.html?mtid=$Row[0]>".$Row[$j]."</a></td>";
			}
			else{
				if ($j!=4)//skip Password feild
			echo "<td>".$Row[$j]."</td>";
			}
			
			
		}
		echo "<td><a href=deletemt.php?mtid=$Row[0]>X</a></td>";
		echo "</tr>";
		
	}
}

//echo "ayman ". strpos($f,"\r\n");
?>
<tr><td colspan="4" align="center"><a href="addmt.html">Add new menutype</a></td></tr>
</table>
This page requires Highl level Permissions