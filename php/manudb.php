<!DOCTYPE html>
<html>
<head>
	<title>MANUFACTURER REPORT TABLE</title>
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
<body  style="background-color: #95a5a6" >
	<div><h1><strong><center><font color="white" >CURRENT MANUFACTURERS REPORT</font></center></strong></h1></div>
<table width="1000" height="600" border="1" cellpadding="1" cellspacing="1">
	<tr>
	<th>MANUFACTURER_ID</th>
    <th>MANUFACTURER_NAME</th>
    <th>PHONE_NUMBER</th>
    <th>EMAIL_ID</th>
    <th>ADDRESS</th>
	</tr>


<?php

$con=mysqli_connect('localhost','root','','dsms1');

$sql="CALL `getmanufacturers`();";

$result=mysqli_query($con,$sql);



while($man=mysqli_fetch_assoc($result)){

echo "<tr>";

echo "<td>".$man['manu_id']."</td>";
echo "<td>".$man['manu_name']."</td>";
echo "<td>".$man['manu_phone']."</td>";
echo "<td>".$man['manu_email']."</td>";
echo "<td>".$man['manu_place']."</td>";
echo "<tr>";

}
?>


</table>
</body>
</html>