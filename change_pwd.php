<!-- php headers -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">

    <title>Dashboard</title>
    <style>
        li{
            list-style-type:none;
        }
      li a{
            text-decoration:none;
        }
    </style>
</head>
<body class="m-0">
<nav class="navbar navbar-expand-lg navbar-light bg-danger my-0" style="height:8vh;">
    <div class="container-fluid ml-2">
       <div>
            <a class="navbar-brand text-white" href="#">Assignment</a>
       </div>
        <div class="d-flex justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="images/profg.png" class="rounded-circle" alt="profile" width="40" height="40" srcset="">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                </ul>
                </li>
            </ul>
        </div>
  </div>
</nav>
<!-- form container -->
<div class=" mx-0" style="height:85vh; background-color:white;">
    <!-- <h1>Test</h1> -->
    <div class="row mt-0">
        <div class="col-md-7 col-sm-12">
                <div class="border  position-relative bg-dark" style="background-image:url(images/bg.png);height:130px;">
                 <img class="rounded-circle position-absolute" src="images/profg.png" style="height:130px; width: 130px; bottom:-2rem;left:1rem;">
                </div>
                <div class="py-3"></div>
                <div class="border bg-white py-2 px-2  ">
                    <h5 style="padding:7px;">Headlines <i class="fa fa-pencil" aria-hidden="true"></i> </h5> 
                    <hr>
                    <h6 style="padding:7px;">Software development workers</h6>
                    <h2 class="bt-info text-white bg-info" style="font-size:14px; height:30px;padding:7px; padding:6px;">
                        <i class="fas fa-key " aria-hidden="true"></i>
                        Change Password
                    </h2>
                </div>
                <div class="div">
                    <table>
                    <tr>
                        <td style="padding:20px;">Current Password</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <div class="position-relative">
                    <td>
                        <!-- <i class="fas fa-key text-info" aria-hidden="true" style="position:absolute; top:268px;left:150px;"></i> -->
                        <input type="password" name="current_password" id="" class="form-control">
                        </td>
                    </div>
                    </tr>
                    <tr>
                        <div class="position:relative;">
                        <td style="padding:20px;">New Password</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>
                            <div class="position-relative">
                                <input type="password" name="new_password" id="" class="form-control">
                                <i class="fas fa-key text-info position-absolute" aria-hidden="true" style="top:10px;left:15px;"></i>
                            </div>
                        </td>
                        </div>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="checkbox" name="" id="">
                            Remind me to change password for each three months
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td> <button type="submit" class="btn btn-info my-3 mx-5">Set New Password</button></td>
                    </tr>
                   
                </table>
                </div>
        </div>
        <div class="col-md-5 col-sm-12 px-3 h-25">
                <li class="text-center border-top border-info border-1 shadow pb-1"> ACCOUNT SETINGS </li>  
                <ul class="mt-2">
                <li class="border-1 border-bottom border-info py-2">
                        <a href="settings.php">
                            <i class="fa fa-edit" aria-hidden="true" style="font-size:20px;"></i>
                             Change Profile
                        </a>
                    </li>
                    <li class="border-1 border-bottom border-info py-2">
                        <a href="change_pwd.php">
                            <i class="fas fa-key" aria-hidden="true" style="font-size:20px;"></i>
                             Change Password
                        </a>
                    </li>
                    <li class="border-1 border-bottom border-info py-2">
                        <a href="#">
                            <i class="fa fa-signal" aria-hidden="true" style="font-size:20px;"></i>
                             Sign in Activities
                        </a>
                    </li>
                    <li class="border-1 border-bottom border-info py-2">
                        <a href="#">
                            <i class="far fa-clock" aria-hidden="true" style="font-size:20px;"></i>
                            <i class="fa fa-warning text-warning" aria-hidden="true" style="font-size:20px;"></i>
                            Session tiomeout
                        </a>
                    </li>
                    <li class="border-1 border-bottom border-info py-2">
                        <a href="#">
                            <i class="fa fa-tag" aria-hidden="true" style="font-size:20px;"></i>
                             Job & Feeds
                        </a>
                    </li>
                    <li class="border-1 border-bottom border-info py-2">
                        <a href="#">
                            <i class="fa fa-envelope" aria-hidden="true" style="font-size:20px;"></i>
                             Email and Notification
                        </a>
                    </li>
                    <li class="border-1 border-bottom border-info py-2">
                        <a href="#">
                            <i class="fa fa-bell" aria-hidden="true" style="font-size:20px;"></i>
                             Push Notification
                        </a>
                    </li>
                    <li class="border-1 border-bottom border-info py-2">
                        <a href="delete_acc.php">
                            <i class="fa fa-user-times" aria-hidden="true" style="font-size:20px;"></i>
                             Delete Account
                        </a>
                    </li>
                    
                </ul>          
        </div>
    </div>
    </div>
</div>

</div>
<div class="row bg-info py-2 m-0 px-4 ">
    <div class="col py-2 d-flex">
        <li><a href="#" class="text-white px-2 text-decoration-none">About us</a></li>
        <li><a href="#" class="text-white px-2 text-decoration-none">Advertizemnet</a></li>
    </div>
    <div class="col text-center"><a href="#"  class="text-white px-2 text-decoration-none">Kigali, Rwanda</a></div>
    <div class="col py-2 d-flex">
        <li><a href="#" class="text-white px-2 text-decoration-none">how search work</a></li>
        <li><a href="#" class="text-white px-2 text-decoration-none">Privacy</a></li>
    </div>
</div>
</body>
<!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
<script src="bootstrap/js/bootstrap.bundle.js"></script>
</html>