<?php

 $con=mysqli_connect('localhost','root','','dsms1');

$id=$_POST['mi'];
$name=$_POST['mn'];
$type=$_POST['mt'];

$sql="INSERT INTO adminlogin  (aid,aname,apswd) values ('$id','$name','$type')";
mysqli_query($con,$sql);

header('location:options1.php');
?>