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
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="m-0 bg-danger text-center py-2 text-white">
    <strong>Assignment</strong>
</div>
<!-- end of header section -->
<div class="sign-in round">
    <div class="card shadow text-center">
        <i class="fa fa-user-circle-o fa-user-top text-info"></i>
        <div class="card-header border-0">
            I can't wait to create an account
        </div>
        <!-- Notification -->
        <?php  if(isset($_SESSION['error'])){  ?>
            <div class="alert alert-warning py-2 text-center text-danger" role="alert">
                <strong> <i class="fa fa-warning"></i> Error:</strong> 
                <?php
                        print $_SESSION['error'];
                        session_unset();
                ?>
            </div>
        <?php } ?>
        <!-- form container -->
        <form action="controller/signup.php" method="post" class="px-3">
            <div class="row">
                <div class="col-md-6 col-sm-12 position-relative m-0">
                    <input type="text" name="fname" class="form-control px-4" placeholder="First name">
                    <i class="fa fa-user text-info  position-absolute" style="top:10px;left:17px"></i>
                </div>
                <div class="col-md-6 col-sm-12 position-relative">
                    <input type="text" name="lname" class="form-control px-4" placeholder="Last name">
                    <i class="fa fa-user text-info  position-absolute" style="top:10px;left:17px"></i>
                </div>
            </div>
            <div class="my-1 position-relative">
                <input type="email" name="email" class="form-control px-4" placeholder="Email">
                <i class="fa fa-envelope text-info  position-absolute" style="top:10px;left:8px"></i>
            </div>
            <div class="my-1 position-relative">
                
                <input type="password" name="pass" id="pwd" class="form-control px-4" placeholder="Password">
                <i class="fas fa-key text-info  position-absolute" style="top:10px;left:8px"></i>
                <i class="fa fa-eye text-info  position-absolute" style="top:10px;right:17px" onclick="show();"></i>
            </div>
            <div class="container my-1">
                <button type="submit" class="btn btn-info text-center form-control border-0" style="border-radius:50px 50px 50px 50px;">
                    Next
                </button>
                <div>
                    <div style="postion:relative;height:2px;background:gray; margin-top:1rem;"></div>
                    <div style="margin-top:-0.8rem"><span style="background:white; z-index:1;">OR</span></div>
                </div>
                <button id="my-signin2" class="btn text-center form-control border-0"></button>
                <span href="#" class="btn text-center form-control text-danger border-0">
                    Already have Account <a href="index.php" class="text-center">sign in</a>
                </span>

            </div>
        </form>
        
    </div>
</div>
<!-- footer section -->
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
<script>
    const show = ()=>{
        const eye = document.querySelector(".eye");
        var pwd = document.querySelector("#pwd");
        if(pwd.type === 'password'){
            pwd.type="text";
        }else{
            pwd.type="password";
        }
    }
    function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
      window.location='home.php'

    }
    onSuccess();
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width':'300',
        'longtitle': true,
        'background':'red',
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
  </script>

  <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
</html>