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
<td>update</td>
</tr>
<?php
include_once "usermodel.php";
$id=$_REQUEST["id"];
$obj=new user();
$r=$obj->getuserbyid($id);

    
echo "<tr><td>".$r->id."</td><td>".$r->fullname."</td><td>".$r->email."</td><td>".$r->type."</td><td><a href=deleteuser.php?id=".$r->id.">delete</a></td><td><a href=updateuser.html?>update</a></td></tr>";
    

?>