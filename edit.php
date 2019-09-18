<?php
include "connection.php";
$id=$_REQUEST['uid'];
$sql="select * from oo where rn='$rn'";
$res=mysqli_query($con,$sql);
$arr=mysqli_fetch_array($res);
?>
<form method="post" action="edit_cs.php">
<input type="hidden" name="uid" value="<?php echo $arr['rn']; ?>">
<table align="center">
<tr>
<td>Student Name</td>
<td><input type="text" name="t1" value="<?php echo $arr['st']; ?>"></td>
</tr>
<tr>
<td>Faculty Name</td>
<td><input type="text" name="t2" value="<?php echo $arr['fn']; ?>"></td>
</tr>
<tr>
<td>SDA Marks</td>
<td><input type="text" name="t3" value="<?php echo $arr['sd']; ?>"></td>
</tr>
<tr>
<td>Activity</td>
<td><input type="text" name="t3" value="<?php echo $arr['ac']; ?>"></td>
</tr>

<td colspan="2" align="center"><input type="submit" name="sub" value="Update"></td>
</tr>
</table>
</form>
