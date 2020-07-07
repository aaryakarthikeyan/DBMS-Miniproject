<!DOCTYPE html>
<html>
<head>
	<title>SEARCH</title>
</head>
<style>
	
.bg{

	background-image: url("kuti2.png") ;
	background-repeat: no-repeat;
	height: 90vh;
	background-size: cover;
	background-position: center;
}

</style>
<body style="font-family: Century Gothic" class="bg">
	<style>
		body{
			margin-top: 100px;
		}
		
		table,th,td{
			border: 2px solid white;
			width: 1100px;

			background-color: #22a6b3; 
		}

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

.contact{
background-color: #7efff5;
position: center;
		border: 5px solid #0652DD;
		opacity: 80%; 
	 height: 580px;
	 width: 1300px;
	}



	</style>
	<center><div class="contact">
	<center><font color="black"><h1><strong>SEARCH PAGE</strong></h1></font></center>

	<center>
<div class="container">
	<font color="black">
	<form action="search.php" method="POST">
		<strong>MEDICINE ID:</strong><input type="text" name="id"><br><br>
		 <button type="submit" name="fm" class="btn"><font color="white">FIND_MEDICINE</font></button>
	</form>

	<table>

		<tr>
			
			<th>MEDICNE ID</th>
			<th>MEDICINE NAME</th>
			<th>MEDICINE TYPE</th>
			<th>MEDICINE UNIT</th>
			<th>MEDICINE PRICE</th>
		</font>
		</tr><br>

		<?php
		$con=mysqli_connect('localhost','root','','dsms1');

		if(isset($_POST['fm']))
		{
			$id=$_POST['id'];
			$query= "SELECT med_id,med_name,med_type,med_units,med_price FROM medicine_report WHERE med_id ='$id'";
			$result=mysqli_query($con,$query);
			while($row =mysqli_fetch_array($result))
{
	?>
	<tr>
		<td><?php echo  $row['med_id'];?></td>
	    <td> <?php echo $row['med_name']; ?></td>
	    <td> <?php echo $row['med_type']; ?></td>
	    <td> <?php echo $row['med_units'];?></td>
	     <td><?php echo $row['med_price'];?> </td>    


	</tr>

	
	<?php
}

		}
		?>
	
	</table>

<br><br><br><br><br>
	<form action="search.php" method="POST">
		<strong>MANUFACTURER NAME:</strong><input type="text" name="id"><br><br>
		 <button type="submit" name="fm" class="btn"><font color="white">FIND_MANUFACTURER</font></button>
	</form>

	<table>

		<tr>
			
			<th>MANUFACTURER ID</th>
			<th>MANUFACTURER NAME</th>
			<th>MANUFACTURER EMAIL</th>
			
		</font>
		</tr><br>

		<?php
		$con=mysqli_connect('localhost','root','','dsms1');

		if(isset($_POST['fm']))
		{
			$id=$_POST['id'];
			$query= "SELECT manu_id,manu_name,manu_email FROM manufacturer_report WHERE manu_name ='$id'";
			$result=mysqli_query($con,$query);
			while($row =mysqli_fetch_array($result))
{
	?>
	<tr>
		<td><?php echo  $row['manu_id'];?></td>
	    <td> <?php echo $row['manu_name']; ?></td>
	    <td> <?php echo $row['manu_email']; ?></td>
	      


	</tr>

	
	<?php
}

		}
		?>
		
	</table>


	

<div><center><a href="options1.php"><br><br><font color="white"><input type="button" value="BACK" class="btn"></font></a></center></div>
</div>
</center>
</center>

</div>

</body>
</html>