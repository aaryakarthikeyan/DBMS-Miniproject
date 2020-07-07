<!DOCTYPE html>
<html>
<head>
	<title>DELETION PAGE</title>
</head>
<body class="bg" style="font-family: Century Gothic">

	<style>



.bg{

	background-image: url("kuti3.png") ;
	background-repeat: no-repeat;
	height: 90vh;
	background-size: cover;
	background-position: center;
}
		
		.btn{
	border: 0;
	background: #57606f;
	color:#fff;
	padding: 12px 50px;
	border-radius: 20px;
	cursor: pointer;
	transition: 0.5s;



}


.btn:hover{
	background: black;}

	.contact{
background-color: #a4b0be;
position: center;
margin-top: -40px;
		border: 5px solid #747d8c;
		opacity: 80%; 
	 height: 450px;
	 width: 800px;
	}

	.contact1{
background-color: #a4b0be;
		border: 5px solid #747d8c;
		opacity: 80%; 
	 height: 70px;
	 width: 450px;
	}





	</style>

	
<br><br><br>
<center><div class="contact1"><font color="white" ><h1><strong>DELETION PAGE<br></strong></h1></font></div></center>
<br><br><br>

	<center>
		<div class="contact">
<div class="container">
	<font color="white">
	<form action="delete.php" method="POST">
		<strong><br><br>MEDICINE NAME:</strong><input type="text" name="id" required="true"><br><br>
		<a href="options.php"><br><button type="submit" name="fm" class="btn">DELETE_MEDICINE</button></a>
	</form>


	<?php
		$con=mysqli_connect('localhost','root','','dsms1');

		if(isset($_POST['fm']))
		{
			$id=$_POST['id'];
			$query= "DELETE FROM medicine_report WHERE med_name ='$id'";
			$result=mysqli_query($con,$query);
		}
?>

<br><br><br>

<center>
<div class="container">
	<font color="white">
	<form action="delete.php" method="POST">
		<strong>MANUFACTURER NAME:</strong><input type="text" name="mn" required="true"><br><br>
		<a href="options.php"><br><button type="submit" name="dm" class="btn">DELETE_MANUFACTURER</button></a>
	</form>


	<?php
		$con=mysqli_connect('localhost','root','','dsms1');

		if(isset($_POST['dm']))
		{
			$id=$_POST['mn'];
			$query= "DELETE FROM manufacturer_report WHERE manu_name ='$id'";
			$result=mysqli_query($con,$query);
		}
?>
<br><br><br>
<a href="options1.php"><button type="submit" name="fm" class="btn" >BACK</button></a>
</div>
</body>
</html>