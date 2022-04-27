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


    $f=getallusers();

for ($i=0;$i<count($f);$i++)
{
    $Row=explode("~",$f[$i]);
    if($Row[0]==$_REQUEST["rid"])
    {
      
	 
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
}


?>

</table>