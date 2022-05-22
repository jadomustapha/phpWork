<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="68276321795-l7r2ek7irpfuam1f7nr36frtehhggjfc.apps.googleusercontent.com">
    <title>Sign In</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="m-0 bg-danger text-center py-2 text-white">
    <strong>Assignment</strong>
</div>
<div class="sign-in round">
    <div class="card shadow text-center">
        <i class="fa fa-user-circle-o fa-user-top text-info"></i>
        <div class="card-header border-0">
        <h2>Welcome Back!</h2>
        </div>
        <div class="card-header border-0">
        <h5>Sign In</h5>
        </div>
        <form action="controller/check_auth.php" method="post" class="px-3">
            
            <div class="container my-1 pb-4 postion-relative">
                <input type="email" name="email" class="form-control px-4" placeholder="Email">
                <i class="fa fa-envelope text-info  position-absolute" style="top:10px;left:17px"></i>
            </div>
            <!-- Notification -->
            <div class="alert alert-warning py-2 text-center text-danger" role="alert">
                <strong> <i class="fa fa-success"></i> Thank you</strong> 
                <h4>We sent Email to verify your Account</h4>
            </div>
            <div class="container my-1">
                
                <div>
                    <div style="postion:relative;height:2px;background:gray; margin-top:1rem;"></div>
                    <div style="margin-top:-0.8rem"><span style="background:white; z-index:1;">OR</span></div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="footer bg-info py-2 m-0 px-4 d-flex justify-content-between">
    <div class="py-2 d-flex">
            <li><a href="#" class="text-white px-2 text-decoration-none">About us</a></li>
            <li><a href="#" class="text-white px-2 text-decoration-none">Advertizemnet</a></li>
    </div>
    <div class="text-center"><a href="#"  class="text-white px-2 text-decoration-none">Kigali, Rwanda</a></div>
    <div class="py-2 d-flex">
        <li><a href="#" class="text-white px-2 text-decoration-none">how search work</a></li>
        <li><a href="#" class="text-white px-2 text-decoration-none">Privacy</a></li>
    </div>
</div>
</body>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.js"></script>

  <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
</html>