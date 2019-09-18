<table align="center" width="800" border="1">
<tr>
<td>Registration</td>
<td>Student</td>
<td>Faculty</td>
<td>SDA</td>
<td>Activity</td>
<td>Edit</td>
<td>Delete</td>
</tr>
<?php
include "connection.php";
$sql="select * from oo";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($res))
{
?>
<tr>
<td><?php echo $row['rn']; ?></td>
<td><?php echo $row['st']; ?></td>
<td><?php echo $row['fn']; ?></td>
<td><?php echo $row['sd']; ?></td>
<td><?php echo $row['ac']; ?></td>
<td><a href="edit.php?uid=<?php echo $row['rn']; ?>">Edit</a></td>
<td><a href="delete.php?uid=<?php echo $row['rn']; ?>">Delete</a></td>

</tr>
<?php } ?>
</table>
