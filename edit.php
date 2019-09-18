<?php
include "connection.php";
$id=$_REQUEST['uid'];
$sql="select * from user where id='$id'";
$res=mysqli_query($con,$sql);
$arr=mysqli_fetch_array($res);
?>
<form method="post" action="edit_cs.php">
<input type="hidden" name="uid" value="<?php echo $arr['id']; ?>">
<table align="center">
<tr>
<td>Name</td>
<td><input type="text" name="t1" value="<?php echo $arr['name']; ?>"></td>
</tr>
<tr>
<td>Email Id</td>
<td><input type="text" name="t2" value="<?php echo $arr['email']; ?>"></td>
</tr>
<tr>
<td>Mobile No</td>
<td><input type="text" name="t3" value="<?php echo $arr['mobile']; ?>"></td>
</tr>
<tr>
<td>Address</td>
<td><textarea name="txt"><?php echo $arr['address']; ?></textarea></td>
</tr>
<tr>

<td colspan="2" align="center"><input type="submit" name="sub" value="Update"></td>
</tr>
</table>
</form>
