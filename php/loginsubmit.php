    <?php

$con= mysqli_connect("localhost","root","","dsms1");

$adminid = $_POST['log'];
$adminid = mysqli_real_escape_string($con, $adminid);
$adminname = $_POST['adminname'];
$adminname = mysqli_real_escape_string($con, $adminname);
$password = $_POST['pswd'];
$password = mysqli_real_escape_string($con, $password);

// Query checks if the email and password are present in the database. 
$query = "SELECT aid,aname,apswd FROM adminlogin WHERE aid='" . $adminid . "' AND aname='" . $adminname . "' and apswd='".$password."'";

$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
  header('location: ad.php');
}

 else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['adminid'] = $row['adminid'];
  $_SESSION['adminname'] = $row['adminname'];
  header('location: options1.php');
}

?>