<?php
session_start();
require_once "../config/config.php";
// print_r($_SESSION);
$id = $_SESSION['id'];
$email = $_SESSION['email'];
$pass = $_POST['cpass'];

$sql = mysqli_query($conn,"SELECT * FROM `users` WHERE `id` = '$email' and `password` = '$pass'");
if(mysqli_num_rows($sql) > 0){
    $data = mysqli_fetch_array($sql);
    $_SESSION['auth'] = $data;
    $upd = mysqli_query($conn,"UPDATE `users` SET `password`='$npass' WHERE `id` = '$id'");
    if($upd){
        $_SESSION['success'] = "Password have been changed!";
        header("location:../home.php");
    }else{
        $_SESSION['success'] = "Failed to change password!";
        header("location:../home.php");
    }
}else{
    $_SESSION['error'] = "Incorect Password Try again!";
    header("location:../home.php");
}