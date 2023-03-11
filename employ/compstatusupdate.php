<?php
   session_start();
   include("connection/connection.php");
   $user=$_GET['emp'];
   $comp=$_GET['comp'];
   $query="UPDATE compstatus SET status1='Completed' WHERE id='$comp' and empid='$user'";
   $result=mysqli_query($conn,$query);
   if(!$result){
    $_SESSION['error']="Allready Completed";
    header("location:/seekyourjob/employ/employ.php#works");
   }else{
    header("location:/seekyourjob/employ/employ.php#work");
   }
?>