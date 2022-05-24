<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
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
<div class="sign-in round">
    <div class="card shadow text-center">
        <i class="fa fa-user-circle-o fa-user-top text-info"></i>
        <div class="card-header border-0">
        <strong>Congrat,
                <?php
                    if(isset($_SESSION['name'])) {
                        print $_SESSION['name'];
                    }
                ?>
            </strong>
        </div>
        <form action="controller/check_password.php" method="post" class="px-3">
            
            <div class="d-flexjustify-content-center">
                <span class="w-75 py-1 px-1 border-primay border" style="border-radius:50px 50px 50px 50px ">
                    
                    <span><?php
                    if(isset($_SESSION['emai'])) {
                        print "<i class='fa fa-user text-info i'></i> ".$_SESSION['emai'];
                    }
                ?></span>
                </span>
            </div>
            <div class="container my-1 pb-4 postion-relative">
                <input type="password" name="email" class="form-control px-4" placeholder="Password">
                <i class="fas fa-key text-info  position-absolute" style="top:10px;left:17px"></i>
            </div>
                        <!-- Notification -->
                <?php  if(isset($_SESSION['error'])){  ?>
                    <div class="alert alert-warning py-2 text-center text-danger" role="alert">
                        <strong> <i class="fa fa-warning"></i> Error:</strong> 
                        <?php
                                print $_SESSION['error'];
                                unset($_SESSION['error']);
                        ?>
                    </div>
                <?php } ?>
                
            <div class="container my-1">
                <button type="submit" class="btn btn-info text-center form-control border-0" style="border-radius:50px 50px 50px 50px;">
                    Next
                </button>
                <div>
                </div>
                <a href="#" class="btn text-center form-control text-danger border-0">forgot password?</a>
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
</html>