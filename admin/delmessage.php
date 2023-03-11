<?php
include("connection/connection.php");
$slno = $_GET['msgid'];
$que10 = "select * from adm_message where slno='$slno'";
$res10 = mysqli_query($conn, $que10);
$cou10 = mysqli_num_rows($res10);
if ($cou10 > 0) {
    $que1 = "delete from adm_message where slno='$slno'";
    $res1 = mysqli_query($conn, $que1);
    header("location:/seekyourjob/admin/inbox.php#message");
}
?>