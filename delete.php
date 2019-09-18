<?php
include "connection.php";
$rn=$_REQUEST['uid'];
$sql="delete from oo where rn='$rn'";
mysqli_query($con,$sql);
header("location:show.php");
?>
