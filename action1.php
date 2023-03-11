<?php
    if(isset($_POST["sub"])){
        $name=$_POST["fname"];
        $phone=$_POST["phone"];
        if(empty($name)){
            $error1="it is empty";
        }
        if(empty($phone)){
            $error2="it is empty";
        }
        if(!preg_match("/^\+?\d{1,3}\s?\d{3,4}\s?\d{6,7}$/", $phone )){
            $error3="enter a valid number";
        }
        header("location:/seekyourjob/check.php?error1='$error1'&error2='$error2'&error3='$error3'");
    }
?>
