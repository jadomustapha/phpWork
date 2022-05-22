<?php
session_start();
require_once "../config/config.php";
$pass = $_POST['email'];
$email = $_SESSION['emai'];
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $_SESSION['error'] = "Please Enter valid email";
        header("location:../index.php");
}else{
    $sql = mysqli_query($conn,"SELECT * FROM `users` WHERE `email` = '$email' and `password` = '$pass'");
    if(mysqli_num_rows($sql) > 0){
        $data = mysqli_fetch_array($sql);
        $_SESSION['auth'] = $data;
        header("location:../home.php");
    }else{
        $_SESSION['error'] = "Incorect Password Try again!";
        header("location:../password.php");
    }
}
