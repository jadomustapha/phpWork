<?php
session_start();
require_once "../config/config.php";
$email = $_POST['email'];
if(isset($email)){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['error'] = "Please Enter valid email";
            header("location:../index.php");
    }else{
        $sql = mysqli_query($conn,"SELECT * FROM `users` WHERE `email` = '$email'");
        if(mysqli_num_rows($sql) > 0){
            $data = mysqli_fetch_array($sql);
            $_SESSION['emai'] = $data['email'];
            $_SESSION['name'] = $data['fname'];
            header("location:../password.php");
            if($data['status'] == 0){
                $_SESSION['error'] = "Your Account is not Verified!";
                header("location:../index.php");
            }
        }else{
            $_SESSION['error'] = "Please email not found";
            header("location:../index.php");
        }
    }
}else{
    $_SESSION['error'] = "Please Enter your email";
    header("location:../index.php");
}