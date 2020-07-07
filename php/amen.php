<!DOCTYPE html>
<html>
<head>
	<title>ADD MEDICINE</title>
	<link rel="stylesheet" type="text/css" href="css/addmed.css">	
</head>
<style>

.bg{

  background-image: url("at1.jpg") ;
  background-repeat: no-repeat;
  height: 90vh;
  background-size: cover;
  background-position: center;
}
.contact{
background-color: #F78FB3;
    border: 5px solid #c44569;
    opacity: 80%;
   margin-top:100px; 
   border-radius: 10px;
   height: 400px;
 
}

.btn{
  border: 0;
  background: #e84393;
  color:#fff;
  padding: 12px 50px;
  border-radius: 20px;
  cursor: pointer;
  transition: 0.5s;

}


.btn:hover{
  background: #B33771;
}




  </style>
<body class="bg">
	<div class="contact">
<center>
                              <font color="black"> <h2>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ADD NEW ADMIN DETAILS</h2></font><br><br>
                            <table>
                            <form  action="addadmin.php" method="POST">
                                <tr><div class="form-group">
                              <font color="black">   <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  ADMIN ID:&nbsp; &nbsp;<input type="number" class="form-control" placeholder="" name="mi"  required = "true" >
                                </div></tr>
                                <tr><div class="form-group">
                              <font color="black">   <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  ADMIN NAME:<input type="text" class="form-control"  placeholder=""  name="mn" required = "true">
                                </div></tr>
                                <tr1><div class="form-group">
                              <font color="black">   <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  ADMIN PASSWORD:<input type="password" class="form-control" placeholder=""  name="mt" required = "true">
                                 </div></tr1>
                                 <tr1><div class="form-group">
                                <font color="black">   <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  CONFIRM PASSWORD:<input type="password" class="form-control" placeholder=""  name="mt1" required = "true">
                                </div></tr1>
                                
                                <br><br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   <button type="submit" name="submit" class="btn "> <font color="black">ADD_ADMIN</font></button></center>
                            </form>
                        </table>
                    
    </div>                
</body>
</html>