<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "thegslogistics";
$tnum = $_POST['tnum'];
$con =mysqli_connect($servername,$username,$password,"$dbname");
  if(!$con){
    die('Could not Connect MySql Server:' .mysql_error());
  }

$query = "SELECT sdate FROM tdetails WHERE tnum = '$tnum'";
$sdate = array_values(mysqli_fetch_array($con->query("SELECT id FROM tdetails WHERE tnum = '$tnum'")))[0];
$now = date("Y-m-d");

$cdate= strtotime($now);
$date2 = strtotime($sdate);
$diff = $cdate - $date2;
$round = round($diff/86400);

if ($round<=2) {
  echo '<script>
 
  window.location="stageOne.html";
 
  </script>';
}elseif ($round >= 2 && $round <= 14) {
  echo '<script>

  window.location="stageTwo.html";

  </script>';
}elseif ($round >= 14 && $round <= 18) {
  echo '<script>

  window.location="StageThree.html";

  </script>';
}elseif ($round >=18 ) {
  echo '<script>

  window.location="FinalLocation.html";

  </script>';
}

?>

