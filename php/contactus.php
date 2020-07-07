<!DOCTYPE html>
<html>
<head>
	<title>CONTACT US PAGE</title>
</head>
<style>
	
	.contact{
background-color: #a4b0be;
		border: 5px solid #747d8c;
		opacity: 80%;
	 margin-top:100px; 
	 height: 450px;
	 width: 800px;
	margin-left: 330px;
}

.contact-form{
	max-width: 100px;
	margin: auto;
	padding: 0 10px;
	overflow: hidden;

}


.contact-form-text{
	display: block;
    width: 50%;
    box-sizing: border-box;
    margin: 16px 0;
    border: 0;
    background: #111;
    padding: 20px 40px;
    outline: none;
    color: #ddd;
    transition: 0.5s;
}

.contact-form-text:focus{
	box-shadow: 0 0 10px 4px #34495e;

}

textarea.contact-form-text{
	resize: none;
	height: 120px;

}


.contact-form-btn{
	float: right;
	border: 0;
	background: #1e272e;
	color:#fff;
	padding: 12px 50px;
	border-radius: 20px;
	cursor: pointer;
	transition: 0.5s;

}


.contact-form-btn:hover{
	background: #706fd3;
}

.btn{
	border: 0;
	background: #1e272e;
	color:#fff;
	padding: 12px 50px;
	border-radius: 20px;
	cursor: pointer;
	transition: 0.5s;
	position: center;

}


.btn:hover{
	background: #706fd3;
}
</style>
<body background="cot1.jpg" style="font-family: Century Gothic">
<style>body{border: 5px solid black}</style>
	<header>
		
	<div class="contact">
<br>
		<h1 style="background-color: white"><strong><center><font color="black">CONTACT US</font></center></strong></h1>
		<form class="contactform"><center>
			<input type="text" class="contact-form-text" placeholder="Entere your name"        required="true" >
			<input type="email" class="contact-form-text" placeholder="Entere your email"      required="true" >
			<input type="text" class="contact-form-text" placeholder="Entere your phonenumber" required="true" >
			<textarea class="contact-form-text" placeholder="Enter your message or feedback"   required="true"></textarea>
			</center>
		</form>
	</div>
	<br><br>
<input type="button" class="contact-form-btn" value="SEND" onclick="alert('THANK YOU FOR THE FEEDBACK')">
	<div><a href = "index.php" ><input class="btn" type="button" value="BACK"></a></div>
</header>
<div><marquee><BR><BR><br><strong>.FOR MORE INFO CONTACT:9449750699||FYI:ALL RIGHTS RESERVED.</strong></marquee></div>
</body>
</html>