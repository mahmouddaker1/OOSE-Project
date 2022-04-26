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




    $f=getallusers();

for ($i=0;$i<count($f);$i++)
{
	if($i==$_REQUEST["id"]-1)
    {
	  $Row=explode("~",$f[$i]);
	  
		
		
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




?>

</table>