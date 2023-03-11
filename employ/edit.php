<?php
    include("includes/session.php");
    $userid=$_SESSION['userid'];
    $query="select * from emp_details where id=$userid";
    $result=mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);
    $age=$_POST["age"];
    $dob=$_POST["dob"];
    $gender=$_POST["gender"];
    $address=$_POST["address"];
    $desc=$_POST["description"];
    $emailmes=$_POST["email"];
    $nature1=$_POST["Nature1"];
    $nature2=$_POST["Nature2"];
    if($count>0){
        $_SESSION['error']="Allready Updated!";
        header("location:employ.php#edit");
    }
    else{
        $sql="insert into `emp_details`(`id`,`age`,`dob`,`gender`,`addre`,`descrip`,`email`,`nature1`,`nature2`) values($userid,'$age','$dob','$gender','$address','$desc','$emailmes','$nature1','$nature2')";
        mysqli_query($conn,$sql);
        $_SESSION['success']="Your Profile Has Been Updated!";
        header("location:employ.php#edit");
    }
?>