<?php
    session_start();
    include("connection/connection.php");
    $username=$_POST['username'];
    $pass=$_POST['password'];
    $sql1="select * from employtable where username='$username' and password='$pass'";
    $result1=$conn->query($sql1);
    $row=mysqli_fetch_assoc($result1);
    $_SESSION['userid']= $row['id'];
    $count1=mysqli_num_rows($result1);
    if($count1>0){
        header("location:employ.php");
    }
    else{ 
        $_SESSION['error']="Invalid Username And Password!";
        header("location:/seekyourjob/files/employlogin.php#login");
    }
?>