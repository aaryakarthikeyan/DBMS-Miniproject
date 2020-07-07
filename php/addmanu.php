<!DOCTYPE html>
<html>
<head>
	<title>ADD MANUFACTURER</title>
	<link rel="stylesheet" type="text/css" href="css/addmanu.css">
</head>
<body style="font-family: Century Gothic" background="ma2.png">
	
	<br><br>
	<div><h1><strong><br><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ADD MANUFACTURER<br><br></strong></h1></div>

	<div>
		

		<form action="manu_insert.php" method="POST">
			
<panel>				
<div class="form-group"><strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;MANUFACTURER ID:      </strong><input type="number" required="true" name="mi"><br><br></div>
<div class="form-group"><strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;MANUFACTURER NAME:     </strong><input type="text" required="true" name="mn"><br><br></div>
<div class="form-group"><strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;MANUFACTURER PHONENUMBER:</strong>           <input type="text" required="true" name="pn"><br><br></div>
<div class="form-group"><strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;MANUFACTURER EMAIL:    </strong><input type="email"required="true" name="me"><br><br></div>
<div class="form-group"><strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;MANUFACTURER ADRESS:   </strong><input type="text" required="true" name="ma"><br><br></div></panel>

<br><br><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<button type="submit" name="submit" class="btn btn-primary">ADD_MANUFACTURER</button>


         </form>
   
	</div>
  
</body>
</html>