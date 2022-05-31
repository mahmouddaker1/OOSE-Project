<table border="1">
<tr>
	<td colspan="4"><font color=red><?php echo @$_GET["Msg"]; ?></font></td>
</tr>
<tr>
<td>id</td>    
<td>Name</td>
</tr>
<?php
include_once "menumodel.php";
$id=$_REQUEST["id"];
$obj=new menu();
$r=$obj->getuserbyid($id);
echo "<tr><td>".$r->id."</td><td>".$r->name."</td><td><a href=deletemenu.php?id=".$r->id.">delete</a></td><td><a href=updatemenu.html?id=".$r->id.">update</a></td></tr>";
?>