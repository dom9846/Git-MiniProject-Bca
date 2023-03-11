<?php
 session_start();
 include("connection/connection.php");
 $empid=$_POST['empid'];
 $name=$_POST['name'];
 $phnum=$_POST['phnum'];
 $message=$_POST['message'];
 $date=date('Y-m-d');
 $query="INSERT INTO `emp_message`(`slno`,`id`,`name`,`phnum`,`message`,`date`) VALUES (0,$empid,'$name','$phnum','$message','$date')";
 $result=mysqli_query($conn,$query);
 if(!$result){
    die("error");
 }
 else{
    $_SESSION['success']="Your Message Has Been Successfully Sent..!";
    header("location:/seekyourjob/index.php#services");
 }
?>