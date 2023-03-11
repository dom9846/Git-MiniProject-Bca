<?php
   session_start();
   include("connection/connection.php");
   $userid=$_SESSION['userid'];
   $query="select * from employtable where id='$userid'";
   $result=$conn->query($query);
   $row = $result->fetch_assoc();
?>