<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "thegslogistics";
$con =mysqli_connect($servername,$username,$password,"$dbname");
  if(!$con){
    die('Could not Connect MySql Server:' .mysql_error());
  }


$tnum = $_POST['tnum'];

#$query = "SELECT id FROM tdetails WHERE tnum = '$tnum'";
$sdate= array_values(mysqli_fetch_array($con->query("SELECT id FROM tdetails WHERE tnum = '$tnum'")))[0];

$now            = time();
$datediff       = $now - $sdate;
$diffd          = round ($datediff / (60 * 60 * 24));


 ?>
