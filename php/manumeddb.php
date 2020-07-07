<!DOCTYPE html>
<html>
<head>
	<title>MEDICINE BOUGHT FROM MANUFACTURER TABLE</title>
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
			background-color: #588c7e;
			color: white;
		}
		tr:nth-child(even) {background: #f2f2f2}
	</style>
</head>
<body style="background-color: #63cdda" >
	<div><h1><strong><center><font COLOR='WHITE' >MEDICINE PURCHASE DETAILS</font></center></strong></h1></div>
<table width="1250" height="600" border="1" cellpadding="1" cellspacing="1">
	<tr>
	<th>MEDICINE_ID</th>
    <th>MEDICINE_NAME</th>
    <th>NO_OF_UNITS</th>
    <th>PURCHASE_DATE</th>
    <th>TOTAL_AMOUNT</th>
    <th>MANUFACTURER_NAME</th>
    <th>MEDICINE_TYPE</th>
	</tr>


<?php

$con=mysqli_connect('localhost','root','','dsms1');

$sql="SELECT * from manumed";

$result=mysqli_query($con,$sql);



while($med=mysqli_fetch_assoc($result)){

echo "<tr>";

echo "<td>".$med['m_id']."</td>";
echo "<td>".$med['m_name']."</td>";
echo "<td>".$med['m_units']."</td>";
echo "<td>".$med['m_date']."</td>";
echo "<td>".$med['m_amt']."</td>";
echo "<td>".$med['manu_name']."</td>";
echo "<td>".$med['m_type']."</td>";

echo "<tr>";

}
?>


</table>
</body>
</html>