<!DOCTYPE html>
<html>
<head>
	<title>ADD MEDICINE</title>
	<link rel="stylesheet" type="text/css" href="css/addmed.css">	
</head>
<style>

.contact{
background-color: #a4b0be;
    border: 5px solid #747d8c;
    opacity: 80%;
   margin-top:100px; 
   border-radius: 10px;
   height: 500px;
   width: 500px;
}



  </style>
<body style="font-family: Century Gothic" background="img2.jpg">
	<div class="contact">
                              <font color="black"> <h2>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ADD MEDICINE</h2></font><br><br>
                            <table>
                            <form  action="medinsert.php" method="POST">
                                <tr><div class="form-group">
                              <font color="white">   <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  MEDICINE ID:&nbsp; &nbsp;<input type="number" class="form-control" placeholder="" name="mi"  required = "true" >
                                </div></tr>
                                <tr><div class="form-group">
                              <font color="white">   <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   MEDICINE NAME:<input type="text" class="form-control"  placeholder=""  name="mn" required = "true">
                                </div></tr>
                                <tr1><div class="form-group">
                              <font color="white">   <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  MEDICINE TYPE:<input type="text" class="form-control" placeholder=""  name="mt" required = "true">
                                </div></tr1>
                                <tr><div class="form-group">
                              <font color="white">    <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  MANUFACTURER NAME:<input type="text" class="form-control"  placeholder="" name="man" required = "true"></font>
                                </div></tr>
                                <tr><div class="form-group">
                              <font color="white">   <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   MEDICINE UNITS:<input  type="text" class="form-control"  placeholder="" name="mu" required = "true"></font>
                                </div></tr>
                                <tr><div class="form-group">
                               <font color="white">  <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   MEDICINE PRICE:<input  type="text" class="form-control"  placeholder="" name="mp" required = "true"></font>
                                </div></tr>
                                <br><br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <button type="submit" name="submit" class="btn btn-primary">ADD_MEDICINE</button>
                            </form>
                        </table>
                    
    </div>                
</body>
</html>