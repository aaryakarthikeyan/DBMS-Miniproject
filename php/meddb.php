<!DOCTYPE html>
<html>
<head>
	<title>MEDICINE REPORT TABLE</title>
	<style>
		table{
			border-collapse: collapse;
			width: 100%;
			color: black;
			font-family: Century Gothic;
			font-size: 25px;
			font-weight: bold;
		}

		th{
			background-color: #34495e;
			color: white;
		}
		tr:nth-child(even) {background: #f2f2f2}
	</style>
</head>
<body style="background-color: #95a5a6" >
	<div><h1><strong><center><font color="white" >CURRENT MEDICINE REPORT</font></center></strong></h1></div>
<table width="1250" height="600" border="1" cellpadding="1" cellspacing="1">
	<tr>
	<th>MEDICINE_ID</th>
    <th>MEDICINE_NAME</th>
    <th>MEDICINE_TYPE</th>
    <th>MANUFACTURER_NAME</th>
    <th>MEDICINE_UNITS</th>
    <th>MEDICINE_PRICE</th>
	</tr>


<?php

$con=mysqli_connect('localhost','root','','dsms1');

$sql= "SELECT * from medicine_report";

$result=mysqli_query($con,$sql);



while($med=mysqli_fetch_assoc($result)){

echo "<tr>";

echo "<td>".$med['med_id']."</td>";
echo "<td>".$med['med_name']."</td>";
echo "<td>".$med['med_type']."</td>";
echo "<td>".$med['manu_name']."</td>";
echo "<td>".$med['med_units']."</td>";
echo "<td>".$med['med_price']."</td>";


echo "<tr>";

}
?>


</table>
</body>
</html>