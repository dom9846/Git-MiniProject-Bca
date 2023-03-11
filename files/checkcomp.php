<?php
    session_start();
    include("connection/connection.php");
    $firstname=$_POST["fname"];
    $lastname=$_POST["lname"];
    $phnum=$_POST["phnum"];
    $description=$_POST["description"];
    $location=$_POST["location"];
    $branch=$_POST["branch"];
    $Picture1=addslashes(file_get_contents($_FILES["Picture1"]["tmp_name"]));
    $date=date('Y-m-d');
    $sql="INSERT INTO `regcomp`(`id`,`fname`,`sname`,`phnum`,`descrip`,`place`,`branch`,`pic1`,`date`) VALUES (0,'$firstname','$lastname','$phnum','$description','$location','$branch','$Picture1','$date')";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        die("error");
    }
    else{
        $_SESSION['success']="Your Complaint Has Successfully Registered..!";
        header("location:/seekyourjob/files/regcomp.php#complaint");
    }
?>