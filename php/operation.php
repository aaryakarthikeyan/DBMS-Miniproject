<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.bg{

  background-image: url("options.jpg") ;
  border-top: 5px solid #34e7e4;
  border-right:5px solid #34e7e4; 
  height: 90vh;
  background-size: cover;
  background-position: center;
  font-family: Century Gothic;
}

 .logo1 img{
    float: right;
    width: 200px;
    height: 200px;
    margin-top: 20px;
    margin-right: 700px;
    border-radius: 50%;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #5758BB;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #3B3B98;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body class="bg" >

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="addmed.php">ADD MEDICINE</a>
  <a href="addmanu.php">ADD MANUFACTURER</a>
  <a href="bill.php">ADD BILL</a>
  <a href="a.php">DELETE OPERATION</a>
</div>


<div id="main">
  
  <font color="white"><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;<B style="border: 5px solid #34e7e4 ;background-color:#34e7e4; font-family: monospace">||PLEASE CLICK TO PERFORM ADMIN OPERATIONS.|| </font></B></span>
</div>

<div>
  <div class="logo1"><img style="border:5px solid #34e7e4" src="op2.png"><br><br><br><br><br><br></div>
  </div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 
