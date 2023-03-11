<?php
    session_start();
    include("connection/connection.php");
    $username=$_POST['username'];
    $pass=$_POST['password'];
    $sql="select * from admintable where username='$username' and password='$pass'";
    $result=$conn->query($sql);
    $row=mysqli_fetch_assoc($result);
    $_SESSION['admin']= $row['id'];
    $count=mysqli_num_rows($result);
    if($count>0){
        header("location:admin.php");
    }
    else{ 
        $_SESSION['error']="Invalid Username And Password!";
        header("location:/seekyourjob/files/adminlogin.php#login");
    }
?>