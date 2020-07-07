<?php

 $con=mysqli_connect('localhost','root','','dsms1');

$id=$_POST['mi'];
$name=$_POST['mn'];
$type=$_POST['mt'];
$manuname=$_POST['man'];
$units=$_POST['mu'];
$price=$_POST['mp'];


$sql="INSERT INTO medicine_report  (med_id,med_name,med_type,manu_name,med_units,med_price) values ('$id','$name','$type','$manuname','$units','$price')";
mysqli_query($con,$sql);

header('location:options1.php');
?>