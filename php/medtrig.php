
<!DOCTYPE html>
<html>
<head>
	<title>MANUFACTURER RECENTLY ADDED TABLE</title>
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
			background-color: #00cec9;
			color: white;
		}
		tr:nth-child(even) {background: #f2f2f2}
	</style>
</head>
<body>
<table width="1000" height="600" border="1" cellpadding="1" cellspacing="1">
	<tr>

    <th>MEDICINE_ID</th>
    <th>MEDICINE_NAME</th>
    <th>ACTION_PERFORMED</th>
    <th>DATE</th>
	</tr>


<?php

$con=mysqli_connect('localhost','root','','dsms1');

$sql= "SELECT * from medicinelog";

$result=mysqli_query($con,$sql);



while($med=mysqli_fetch_assoc($result)){

echo "<tr>";

echo "<td>".$med['med_id']."</td>";
echo "<td>".$med['med_name']."</td>";
echo "<td>".$med['action_performed']."</td>";
echo "<td>".$med['date']."</td>";


echo "<tr>";

}
?>



</table>
</body>
</html>