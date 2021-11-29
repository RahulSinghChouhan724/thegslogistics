<?php
include_once 'db.php';
{
  $name = $_POST['sname'];
  $date = $_POST['sdate'];
  $tnum = $_POST['Tnum'];
  $sql = "INSERT INTO tdetails (sname,sdate,tnum)
       VALUES ('$name','$date','$tnum')";
       if (mysqli_query($conn, $sql)) {
         echo '<script>

       window.location="trackingidG.php";

       </script>';
       } else {
          echo "Error: " . $sql . ":-" . mysqli_error($conn);
       }
       mysqli_close($conn);
}
?>
