<?php

 $con=mysqli_connect('localhost','root','','dsms1');

$id=$_POST['mi'];
$name=$_POST['mn'];
$units=$_POST['mu'];
$date=$_POST['pd'];
$amt=$_POST['ta'];
$manuname=$_POST['man'];
$type=$_POST['mt'];



$sql="INSERT INTO manumed  (m_id,m_name,m_units,m_date,m_amt,manu_name,m_type) values ('$id','$name','$units','$date','$amt','$manuname','$type')";
mysqli_query($con,$sql);

header('location:payment.php');
?>