<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
.bg{

  background-image: url("qu4.png") ;
  height: 90vh;
  background-size: cover;
  background-position: center;
  font-family: Century Gothic;
}

.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  border: 5px solid #182c61;
  background-color:#ffcccc ;
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 5px;
  text-decoration: none;
  font-size: 36px;
  color: black;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #c44569;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
</style>
</head>
<body class="bg"   >
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
     <a href="amen.php">ADD NEW ADMIN</a>
    <a href="search.php"><br>SEARCH</a>
    <a href="operation.php"><br>OPERATION(ADD,DELETE)</a>
    <a href="report.php"><br>REPORTS</a>
    <a href="less.php"><br>BUY</a>
  </div>
</div>


<CENTER><span style="font-size:40px;cursor:pointer; color: black" onclick="openNav()">&#9776;<B style="border: 5px solid #00d8d6;background-color:#2d98da; font-family: monospace ">||PLEASE CLICK TO PERFORM ADMIN OPERATIONS.|| </B></span></CENTER>
 <div>
  <img style=
  "margin-top:-50px; 
    width: 200px;
    height: 100px;
    margin-left: 30px;
    border-radius: 50%;
    border: 5px solid #00d8d6;
    " src="medicurelogo.jpg">
          </div>
<div>
      <font style="font-size:30px;color: white; font-family: monospace;" ><br><br><br><br><br> <br><br><br><br><br><br><br><br>  <marquee> WELCOME TO MEDICURE ADMIN PAGE</marquee></font></div>



     
<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
     
</body>
</html>
