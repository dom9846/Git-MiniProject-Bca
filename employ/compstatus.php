<?php
   session_start();
   include("connection/connection.php");
   $user=$_GET['emp'];
   $comp=$_GET['comp'];
   $query="select * from compstatus where id='$comp'";
   $result=mysqli_query($conn,$query);
   $count=mysqli_num_rows($result);
   if($count>0){
       $_SESSION['error']="Allready Committed";
       header("location:/seekyourjob/employ/employ.php#complaints");
   }else{
    $status="On Going";
    $date=date('Y-m-d');
    $query1="INSERT INTO `compstatus`(`slno`,`id`,`status1`,`empid`,`date`) VALUES (0,'$comp','$status','$user','$date')";
    $result1=mysqli_query($conn,$query1);
    $_SESSION['success']="You Have committed This work";
    header("location:/seekyourjob/employ/employ.php#complaints");
   }
?>

<!-- $que="select * from compstatus where id='$comp' and empid='$user' and status1='On Going'";
     $res=mysqli_query($conn,$que);
     $count2=mysqli_num_rows($res); 
     if($count2>0){
       $_SESSION['error']="Complete Your Committed Work";
       header("location:/seekyourjob/employ/employ.php#complaints");
     }
     else{ -->

