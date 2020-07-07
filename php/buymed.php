<!DOCTYPE html>
<html>
<head>
	<title>BUY MEDICINES FROM MANUFACTURER</title>
	<link rel="stylesheet" type="text/css" href="css/buymed.css">
	
</head>
<body style="font-family: Century Gothic" background= "a3.png" >
	<font color="white">
	<br><br>
	<center>
	<div><h1><strong><br><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; BUY MEDICINES FROM MANUFACTURER<br><br></strong></h1></div>

	<div>
		

		<form action="manu_purchase.php" method="POST" >
			<fieldset style="filter-background: blur(4px)">
		
<div class="form-group"><strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;MEDICINE ID:      </strong><input type="number" required="true" name="mi"><br><br></div>
<div class="form-group"><strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;MEDICINE NAME:     </strong><input type="text" required="true" name="mn"><br><br></div>
<div class="form-group"><strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;MEDICINE UNITS:</strong>           <input type="number" required="true" name="mu"><br><br></div>
<div class="form-group"><strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PURCHASE DATE:    </strong><input type="date"required="true" name="pd"><br><br></div>
<div class="form-group"><strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;TOTAL AMOUNT:   </strong><input type="text" required="true" name="ta"><br><br></div>
<div class="form-group"><strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;MANUFACTURER NAME:   </strong><input type="text" required="true" name="man"><br><br></div>
<div class="form-group"><strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;MEDICINE TYPE:   </strong><input type="text" required="true" name="mt"><br><br></div>

<br><br><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="payment.php"><button type="submit"  name="submit" class="btn btn-primary" >  PURCHASE MEDICINE AND PROCEED TO PAYMENT</button></a>
</fieldset>

         </form>
   
	</div>
  </font>
</center>
</body>
</html>