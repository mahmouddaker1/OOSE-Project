<table border="1">
<tr>
	<td colspan="4"><font color=red><?php echo @$_GET["Msg"]; ?></font></td>
</tr>
<tr>
<td>id</td>    
<td>Name</td>
</tr>
<?php
include_once "UserTypeModel.php";
$id=$_REQUEST["id"];
$obj=new userType();
$r=$obj->getuserbyid($id);
echo "<tr><td>".$r->id."</td><td>".$r->name."</td><td><a href=deleteusertype.php?id=".$r->id.">delete</a></td><td><a href=updateusertype.html?id=".$r->id.">update</a></td></tr>";
?>