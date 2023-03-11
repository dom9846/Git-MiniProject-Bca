<?php
   session_start();
   include("connection/connection.php");
   $admin=$_SESSION['admin'];
   $query="select * from admintable where id='$admin'";
   $result=$conn->query($query);
   $row = $result->fetch_assoc();
?>