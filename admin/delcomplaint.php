<?php
   include("connection/connection.php");
   $check=$_GET['check'];
   if($check=="2"){
    $compid=$_GET['compid'];
    $que10="select * from compstatus where id='$compid'";
    $res10=mysqli_query($conn,$que10);
    $cou10=mysqli_num_rows($res10);
    if($cou10>0){
        $que1="delete from compstatus where id='$compid'";
        $res1=mysqli_query($conn,$que1);
    }
    $que2="delete from regcomp where id='$compid'";
    $res2=mysqli_query($conn,$que2);
    header("location:/seekyourjob/admin/complaint_adm.php");
   }
   elseif($check=="1"){
    $empid=$_GET['empid'];
    $q1="select * from emp_details where id='$empid'";
    $r1=mysqli_query($conn,$q1);
    $c1=mysqli_num_rows($r1);
    $q2="select * from emp_message where id='$empid'";
    $r2=mysqli_query($conn,$q2);
    $c2=mysqli_num_rows($r2);
    $q3="select * from compstatus where empid='$empid'";
    $r3=mysqli_query($conn,$q3);
    $c3=mysqli_num_rows($r3);
    if($c1>0){
        $que3="delete from emp_details where id='$empid'";
        $res3=mysqli_query($conn,$que3);
        if($c2>0){
            $que4="delete from emp_message where id='$empid'";
            $res4=mysqli_query($conn,$que4);
        }
        if($c3>0){
            $que5="delete from compstatus where empid='$empid'";
            $res5=mysqli_query($conn,$que5);
        }
        $que8="delete from employtable where id='$empid'";
        $res8=mysqli_query($conn,$que8);
    }
    else{
        if($c2>0){
            $que6="delete from emp_message where id='$empid'";
            $res6=mysqli_query($conn,$que6);
        }
        if($c3>0){
            $que9="delete from compstatus where empid='$empid'";
            $res9=mysqli_query($conn,$que9);
        }
        $que7="delete from employtable where id='$empid'";
        $res7=mysqli_query($conn,$que7);
    }
    header("location:/seekyourjob/admin/employ_adm.php");
   }
   else{
    echo "error";
   }
?>