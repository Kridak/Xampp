<?php
ob_start();
error_reporting(0);
include "connection.php";
$nm=$_REQUEST['t1'];
$em=$_REQUEST['t2'];
$mb=$_REQUEST['t3'];
// $im=$_FILES['f1']['name'];
$ad=$_REQUEST['t4'];
$pk=$_REQUEST['t5'];
// move_uploaded_file($_FILES['f1']['tmp_name'],"upload/".$im);
$sql="INSERT into oo (rn,st,fn,sd,ac) values ('$nm','$em','$mb','$ad','$pk')";
mysqli_query($con,$sql);
//header("location:form.php")
header("location:show.php");
?>
