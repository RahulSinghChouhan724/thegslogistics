<?php
include_once db.php;
$tnum = $_POST['tnum'];
$sql ="select sdate FROM tdetails where tnum = '$tnum';

 ?>
 $sdate = $result ->free_result();



 if ($diffd<=2) {
 echo '<script>

 window.location="stageOne.html";

 </script>';



 #$query = "SELECT id FROM tdetails WHERE tnum = '$tnum'";
 $sdate= array_values(mysqli_fetch_array($con->query("SELECT id FROM tdetails WHERE tnum = '$tnum'")))[0];
 #echo $sdate;

 $now            =  time();
 echo $now;

 #$datediff       = $now - $sdate;
 #echo $datediff;
 #$diffd          = round ($datediff / (60 * 60 * 24));

 #echo $diffd;
