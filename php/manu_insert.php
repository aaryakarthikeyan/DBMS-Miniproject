<?php

 $con=mysqli_connect('localhost','root','','dsms1');

$id=$_POST['mi'];
$name=$_POST['mn'];
$phone=$_POST['pn'];
$email=$_POST['me'];
$address=$_POST['ma'];



$sql="INSERT INTO manufacturer_report  (manu_id,manu_name,manu_phone,manu_email,manu_place) values ('$id','$name','$phone','$email','$address')";
mysqli_query($con,$sql); 

header('location:options1.php');
?>