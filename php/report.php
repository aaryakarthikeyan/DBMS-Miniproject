<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.bg{

  background-image: url("qu2.jpg") ;
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
    border-radius: 30%;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #7ed6df;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: white;
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
<body class="bg">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="meddb.php">FULL MEDICNE DATABASE </a>
  <a href="manudb.php">FULL MANUFACTURER DATABASE</a>
  <a href="manumeddb.php">FULL ORDERS MADE DATABASE</a>
  <a href="medtrig.php">RECENTLY ADDED MEDICNES</a>
  <a href="manutrig.php">RECENTLY ADDED MANUFACTURERS</a>
</div>

<div>
  <div class="logo1"><img style="border:5px solid #546de5" src="m.jpg"><br><br><br><br><br><br></div>
  </div>

<div id="main">
  
  <br><br><br><br><br><br><br><br><br><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;<B style="border: 5px solid #34e7e4 ;background-color:#546de5; font-family: monospace"><font color="black">||PLEASE CLICK TO PERFORM ADMIN OPERATIONS.|| </font></B></span>
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
