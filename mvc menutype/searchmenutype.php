<table border="1">
<tr>
	<td colspan="4"><font color=red><?php echo @$_GET["Msg"]; ?></font></td>
</tr>
<tr>
<td>id</td>
<td>user id</td>    
<td>menu id</td>
<td>Delete</td>
<td>update</td>
</tr>
<?php
include_once "menutypemodel.php";
$id=$_REQUEST["id"];
$obj=new menutype();
$r=$obj->getmenutypebyid($id);

    
echo "<tr><td>".$r->id."</td><td>".$r->uid."</td><td>".$r->mid."</td><td><a href=deletemenutype.php?id=".$r->id.">delete</a></td><td><a href=updatemenutype.html?>update</a></td></tr>";
    

?>