<!DOCTYPE html>
<html>
<head>
	<title>DELETE</title>
</head>


<body style="font-family: Century Gothic" background="w1.jpg">


<style>
body{
			margin-top: 100px;
		}
		
		
		.btn{
	border: 0;
	background: #95a5a6;
	color:#fff;
	padding: 12px 50px;
	border-radius: 20px;
	cursor: pointer;
	transition: 0.5s;

}


.btn:hover{
	background: #95a5a6;
}
</style>





	<center><font color="white"><h1><strong>DELETE PAGE</strong></h1></font></center>

	<center>

<div class="container">

	<font color="white">

	<form action="delete.php" method="POST">

		<strong>MEDICINE NAME:</strong><input type="text" name="id"><br><br>

		 <button type="submit" name="fm" class="btn">DELETE_MEDICINE</button>
	

<?php
		$con=mysqli_connect('localhost','root','','dsms1');

		if(isset($_POST['fm']))
		{
			$id=$_POST['id'];
			$query= "DELETE FROM medicine_report WHERE med_name ='$id'"; 
			$result=mysqli_query($con,$query);
			
}

header("Location: delete.php");
	?>
</form>


<br><br><br><br><br>
	<form action="delete.php" method="POST">
		<strong>MANUFACTURER NAME:</strong><input type="text" name="id"><br><br>
		 <button type="submit" name="fm" class="btn">DELETE_MANUFACTURER</button>
	


<?php
		$con=mysqli_connect('localhost','root','','dsms1');

		if(isset($_POST['fm']))
		{
			$id=$_POST['id'];
			$query= "DELETE FROM manufacturer_report WHERE manu_name ='$id'"; 
			$result=mysqli_query($con,$query);
			}

			header("Location: delete.php");

	?>

</form>
	

		

<div><center><a href="options.php"><br><br><input type="button" value="BACK" class="btn"></a></center></div>
</div>
</center>
</body>
</html>