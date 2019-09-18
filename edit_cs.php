<?php
ob_start();
error_reporting(0);
$id=$_REQUEST['uid'];
include "connection.php";
$nm=$_REQUEST['t1'];
$em=$_REQUEST['t2'];
$mb=$_REQUEST['t3'];
// $im=$_FILES['f1']['name'];
$ad=$_REQUEST['t4'];
$pk=$_REQUEST['t5'];

$sql="UPDATE oo set st='$em',fn='$mb',sd='$ad',ac='pk' where rn='$rn'";
mysqli_query($con,$sql);
header("location:show.php");
?>
