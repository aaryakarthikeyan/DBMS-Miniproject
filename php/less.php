<!DOCTYPE html>
<html>
<head>
	<title>MEDICINE TO BUY SHORTLY REPORT TABLE</title>
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
			background-color: #cf6a87;
			color: white;
		}
		tr:nth-child(even) {background: white}

		.btn{
	border: 0;
	background: #34495e;
	color:#fff;
	padding: 12px 50px;
	border-radius: 10px;
	cursor: pointer;
	transition: 0.5s;

}


.btn:hover{
	background: #2e86de;
}
	</style>
</head>
<div>
<body style="background-color: #f8a5c2" >
	<div><h1><strong><center><font >MEDICINE TO BUY SHORTLY REPORT TABLE</font></center></strong></h1></div>
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

$sql= "SELECT * from medicine_report where med_units<10";

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



</table></div>
<center><a href="buymed.php"><br><br><font color="white"><input type="button" value="BUY" class="btn"></font></a></center></div>
</body>
</html>