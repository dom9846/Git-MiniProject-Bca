<?php
 session_start();
 include("connection/connection.php");
 $name=$_POST['name'];
 $phnum=$_POST['phnum'];
 $subject=$_POST['subject'];
 $message=$_POST['message'];
 $date=date('Y-m-d');
 $query="INSERT INTO `adm_message`(`slno`,`name`,`phnum`,`subject`,`message`,`date`) VALUES (0,'$name','$phnum','$subject','$message','$date')";
 $result=mysqli_query($conn,$query);
 if(!$result){
   $_SESSION['error']="Message Is Not Sent!";
   header("location:/seekyourjob/index.php#contact");
 }
 else{
   $_SESSION['success']="Successfully Sent!";
   header("location:/seekyourjob/index.php#message");
 }
?>