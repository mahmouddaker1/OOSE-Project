<table border="1">
<tr>
	<td colspan="4"><font color=red><?php echo @$_GET["Msg"]; ?></font></td>
</tr>
<tr>
<td>registration id</td>    
<td>student id</td>
<td>course name </td>
<td>course id</td>
<td>Delete</td>
</tr>




<?php


$filename="registration.txt";


    $f=getallusers();
    function getallusers()
    {
        global $filename;
        $r=listall($filename);
        return $r;
    }
    function listall($filename)
{
    $myfile=fopen($filename,"r+");
    $i=0;
    while(!feof($myfile))
    {
        $line[$i]=fgets($myfile);
        $i++;
    
    }
    return $line;
}

for ($i=0;$i<count($f);$i++)
{
	if($i==$_REQUEST["rid"]-1)
    {
	  $Row=explode("~",$f[$i]);
	  
		
		
		echo "<tr>";
		for ($j=0;$j<count($Row);$j++)
		{
			if ($j==1)// Generate Link
			{
				
				echo"<td><a href=editregistration.html?rid=$Row[0]>".$Row[$j]."</a></td>";
			}
			else{
				
			echo "<td>".$Row[$j]."</td>";
			}
			
			
		}
		echo "<td><a href=del.php?rid=$Row[0]>X</a></td>";
		echo "</tr>";
		
	   
    }

	
}




?>

</table>