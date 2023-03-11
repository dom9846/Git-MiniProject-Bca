<?php
    include("connection/connection.php");
    $firstname=$_POST["fname"];
    $lastname=$_POST["lname"];
    $username=$_POST["uname"];
    $password=$_POST["pass"];
    $quali=$_POST["qualification"];
    $phnum=$_POST["phno"];
    $location=$_POST["location"];
    $branch=$_POST["branch"];
    $propic=addslashes(file_get_contents($_FILES["propic"]["tmp_name"]));
    $certificate=addslashes(file_get_contents($_FILES["certificate"]["tmp_name"]));
    $adhar=addslashes(file_get_contents($_FILES["adhar"]["tmp_name"]));
    $date=date('Y-m-d');
    $sql="INSERT INTO `employtable`(`id`,`fname`,`sname`,`username`,`password`,`qualification`,`phnum`,`place`,`branch`,`picture`,`certificate`,`adhar`,`date`) VALUES (0,'$firstname','$lastname','$username','$password','$quali','$phnum','$location','$branch','$propic','$certificate','$adhar','$date')";
    $result=mysqli_query($conn,$sql);
    
    if(!$result){
        die("error");
    }
    header("location:/seekyourjob/index.php"); 
?>