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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .right ul li:hover{
        background: gray;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-danger" style="height:8vh;">
    <div class="container-fluid ml-2">
       <div>
            <a class="navbar-brand text-white" href="#">Assignment</a>
       </div>
        <div class="d-flex justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="images/prof.png" class="rounded-circle" alt="profile" width="40" height="40" srcset="">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                </ul>
                </li>
            </ul>
        </div>
  </div>
</nav>
  <!-- [/header]
      =================================================================================================
       [body section]
    -->
<div class="body mx-0"  style="min-height:83vh;">
    <div class="row mx-0 mt-1">
        <div class="col-md-8 md-sm-12 m-0"">
        <div class="mt-0 bg-dark" style="background-image:url();min-height:20vh;">
                <div class="profile">
                    <div class="py-3">&nbsp;</div>
                    <strong class="text-white"style="position:absolute">
                    <img src="images/prof.png" class="rounded-circle mx-3" alt="profile" width="100" height="100" srcset="">
                    Mustapha Iconic</strong>
                   
                </div>
                
            </div>
            <div class="headline mt-3 position-relative border-primary border-top border-1">
                <strong>Headlines</strong>
                <p>Software Engeneer | Data Analyst</p>
            </div>
            <div class="row mx-0 shadow">
                <div class="bg-primary border-danger border-3 py-1 border-bottom">
                    <i class="fa fa-key"></i>Change Password
                </div>
                <div class="form">
                    <center>
                    <table>
                        <tr>
                            <td>Current Password</td>
                            <td>
                                <div class="container my-1 pb-4">
                                    <input type="password" name="email" class="form-control px-4" placeholder="Password">
                                    <i class="fa fa-lock email text-primary i" style="left:10px;"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>New Password</td>
                            <td>
                                <div class="container my-1 pb-4">
                                    <input type="password" name="email" class="form-control px-4" placeholder="Password">
                                    <i class="fa fa-lock email text-primary i" style="left:10px;"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="d-flex justify-content-end pb-3 px-4"><button type="submit" name="changep"class="btn btn-primary rounded">Set New Password</button></td>
                        </tr>
                    </table>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-md-4 md-sm-12 p-0 m-0 right">
            <li class="border-primary border-top border-2 shadow text-primary">Account Settings</li>
            <ul class="px-0 mx-0 mt-1">
                    <li class="border-primary border-bottom border-2 hadow mb-2">
                        <a href="#" class="mx-4 text-decoration-none text-black"><i class="fa-fa-edit"></i> Edit Profile</a>
                    </li>
                    <li class="border-primary border-bottom border-2 hadow mb-2">
                        <a href="#" class="mx-4 text-decoration-none text-black"><i class="fa-fa-key"></i> Change Password</a>
                    </li>
                    <li class="border-primary border-bottom border-2 hadow mb-2">
                        <a href="#" class="mx-4 text-decoration-none text-black"><i class="fa-fa-edit"></i> Sign Activities</a>
                    </li>
                    <li class="border-primary border-bottom border-2 hadow mb-2">
                        <a href="#" class="mx-4 text-decoration-none text-black"><i class="fa-fa-edit"></i> Session Timeout</a>
                    </li>
                    <li class="border-primary border-bottom border-2 hadow mb-2">
                        <a href="#" class="mx-4 text-decoration-none text-black"><i class="fa-fa-edit"></i> Monitization</a>
                    </li>
                    <li class="border-primary border-bottom border-2 hadow mb-2">
                        <a href="#" class="mx-4 text-decoration-none text-black"><i class="fa-fa-tag"></i> Job Feedback Content</a>
                    </li>
                    <li class="border-primary border-bottom border-2 hadow mb-2">
                        <a href="#" class="mx-4 text-decoration-none text-black"><i class="fa-fa-envelope"></i> Email and SMS Notification</a>
                    </li>
                    <li class="border-primary border-bottom border-2 hadow mb-2">
                        <a href="#" class="mx-4 text-decoration-none text-black"><i class="fa-fa-edit"></i> Push notification</a>
                    </li>
                    <li class="border-primary border-bottom border-2 hadow mb-2">
                        <a href="#" class="mx-4 text-decoration-none text-black"><i class="fa-fa-user"></i> Delete account</a>
                    </li>
                </ul>
        </div>
    </div>
</div>
  <!-- [/body section]
      =================================================================================================
      
      
      [footer]
    -->
<div class="footer bg-primary py-2 m-0 px-4 d-flex justify-content-between">
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
</html>