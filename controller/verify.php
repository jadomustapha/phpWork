<?php
session_start();
require_once "../config/config.php";
$newToken = bin2hex(openssl_random_pseudo_bytes(16));
$token = $_GET['token'];
$sql = "SELECT * FROM `users` WHERE `token` = '$token'";
$res = mysqli_query($conn,$sql);
$data = mysqli_fetch_array($res);
if($token === $data['token']){
    $upd = "UPDATE `users` SET `token`='$newToken',`status`= 1 WHERE `token` = '$token'";
    if(mysqli_query($conn,$upd)){
        $_SESSION['user'] = $data;
        header("location:../");

    }
    }

?>