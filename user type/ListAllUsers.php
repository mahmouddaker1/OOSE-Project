<form action="ListAllUsers.php" method="post">
Search <input type="text" name="KeyWord" /> <input type="image" src="download.png" align="middle"/>
</form>
<table border="1">
<tr>
	<td colspan="4"><font color=red><?php echo @$_GET["Msg"]; ?></font></td>
</tr>
<tr>
<td>ID</td>
<td>Name</td>
</tr>
<?php
$o="";
$id="";
include "UserFnc.php";
session_start();
if (!isset($_SESSION["Email"]))
{
	//header("Location: login.php?error=2");	
}

if (isset($_REQUEST["KeyWord"]))
{
	//echo "ayman".$_REQUEST["KeyWord"];
if($_REQUEST["KeyWord"]=="")
{
	$o=0;
}
else
{
$o++;
$f=getAllUsersByKeyWord($_REQUEST["KeyWord"]);
echo "<td><a href=UpdateUser2.php?>".$f."</a></td>";
echo "<td><a href=UpdateUser2.php?>".$_REQUEST["KeyWord"]."</a></td>";
}
}
else
{
$f=getAllUsers();
}
$file=fopen("user type.txt","r+")or die("can't read");
while((!feof($file))&&$o==0)
{
	$line=fgets($file);
	$ArrayLine=explode("~",$line);
		echo "<tr>";
		for ($j=1;$j<count($ArrayLine);$j++)
		{
				echo "<td><a href=UpdateUser2.php?id=$ArrayLine[0]>".$ArrayLine[0]."</a></td>";
				echo "<td><a href=UpdateUser2.php?name=$ArrayLine[1]>".$ArrayLine[1]."</a></td>";

		echo "<td><a href=deleteUser.php?id=$ArrayLine[0]>X</a></td>";
		echo "</tr>";
		
	}
}
fclose($file);
?>
<tr>
	<td colspan="4" align="center">
		<a href= "RegisterForm.php"> add new user type </a>
	</td>
</tr>
</table>