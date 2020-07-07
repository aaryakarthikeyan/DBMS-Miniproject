<!DOCTYPE html>
<html>
<head>
	<title>ADMIN LOGIN PAGE</title>
	

</head>
<style >
	@import "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css";
.bg{

	background-image: url("qu7.jpg") ;
	background-repeat: no-repeat;
	height: 90vh;
	background-size: cover;
	background-position: center;
}

.contact{
	border: 5px solid #18dcff;
	margin-left: 220px;
	margin-top: 50px;
	height:300px;
	width: 1000px;
	background-color: white;
	opacity:70%; 

}


ul{
	float: right;
	list-style-type: none;
    margin-top: 35px;
}

ul li
{
display: inline-block;
font-family: Century Gothic;
font-size: 20px;
}
 
ul li a{

	text-decoration: none;
	color: #fff;
	padding: 5px 20px;
	border: 1px solid transparent;
	transition: 0.6s ease;
}

ul li a:hover{
	background-color: #fff;
	color: #000;
}

ul li.active a{
	background-color: #fff;
	color: #000;
}

.login{
	width: 280px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);

}
.login h1{
	float: left;
	font-size: 50px;
	border-bottom: 25px solid #24e13b  ;
	margin-bottom: 110px;
	padding: 20px 0;
	color: white;
	margin-right: 15px;
}



.tb{
	width: 100%;
	overflow: hidden;
	font-size: 40px;
	padding: 4px 0;
	margin: 4px 0;
	border-bottom: 3px solid #18dcff;
}

.btn{
	border: 0;
	background: #1e3799;
	color:#fff;
	padding: 20px 480px;
	border-radius: 5px;
	cursor: pointer;
	transition: 0.5s;
	margin-right: 60px;

}


.btn:hover{
	background: #2980b9;
}
</style>

<body class="bg" >
	<strong><font color="white">
	<marquee>.LOGIN PAGE||ONLY ADMIN CAN LOGIN!!.<br><br><br><br><br><br></marquee>	</font>
	</strong>
	
<header class="contact"><center>
	<h1 ><font color="black"  >LOGIN PAGE</font></h1>
		<form method="POST" action="loginsubmit.php">

		<div class="tb">
			<i class="fa fa-user" aria-hidden="true"></i>
		<input type="text" placeholder="Login_id"  name="log"><br>
		</div>

		<div class="tb">
			<i class="fa fa-user" aria-hidden="true"></i>
		<input type="text" placeholder="Admin_name"  name="adminname"><br>
		</div>


		<div class="tb">
			<i class="fa fa-key" aria-hidden="true"></i>
		<input type="password" placeholder="Password"  name="pswd"><br>
		</div>
<br>
		
</center>
</header>
 

<div>
	<center><br><br><button class="btn" type="submit" name="submit" >LOGIN</button></center>
       </div>

  </form>


 
</body>
</html>