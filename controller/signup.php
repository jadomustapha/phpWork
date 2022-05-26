<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
session_start();
require_once "../config/config.php";
$token = bin2hex(openssl_random_pseudo_bytes(16));
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];

    $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
        $res = mysqli_query($conn,$sql);
        $data = mysqli_fetch_array($res);
        if(mysqli_num_rows($res)>0){
            $_SESSION['error'] = "Please your email already taken!";
            header("location:../signup.php");
        }

if(filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($fname) && !empty($lname) && !empty($pass)){
    // $pass = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "INSERT INTO `users`(`fname`, `lname`, `email`, `password`, `token`)
     VALUES ('$fname','$lname','$email','$pass','$token')";
    $res = mysqli_query($conn,$sql);
    if($res){
        $sql = "SELECT * FROM `users` WHERE `token` = '$token'";
        $res = mysqli_query($conn,$sql);
        $data = mysqli_fetch_array($res);
        if(empty($fname)){
            $_SESSION['error'] = "Please First name is required!";
            header("location:../signup.php");
        }
        $body = "<h3> click this link to 
        <a href='http://localhost/phpWork/controller/verify.php?token=".$data['token']."' style='padding:0.5rem; background:teal; text-decoration:none; color:white; border-radius:7px;'>Verify Your Account</a>
        your account</h3>";

// [sending email]
//         ==========================================================================================
// [sending email]
$error=NULL;
  require '../vendor/autoload.php';
$mail = new PHPMailer(true);
try {
  // $mail->SMTPDebug = 2;                  
  $mail->isSMTP(true);                      
  $mail->Host  = 'smtp.gmail.com;';         
  $mail->SMTPAuth = true;             
  $mail->Username = 'jadoiconic@gmail.com';        
  $mail->Password = 'sndrec123451';            
  $mail->SMTPSecure = 'tls';              
  $mail->Port  = 587;

  $mail->setFrom('jadoiconic@gmail.com', 'Email verification link');    
  $mail->addAddress($email);
  $mail->isHTML(true);                
  $mail->Subject = 'Php work Email verification';
  $mail->Body = $body;
  $mail->AltBody = 'Body in plain text for non-HTML mail clients';
  $mail->send();
//   print "message sent";
//   header('location:send_email.php');
  
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
// [/sending email]
// =========================================================================
// [/sending email]
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="m-0 bg-danger text-center py-2 text-white">
    <strong>Assignment</strong>
</div>
<div class="sign-in round">
    <div class="card shadow text-center" style="height:50vh;">
        <i class="fa fa-user-circle-o fa-user-top text-primary"></i>
        <div class="card-header border-0">
        <strong>Congrat, <?php print $fname; ?></strong>
        </div>
            <div class="d-flexjustify-content-center ">
                <span class="w-75 py-1 px-1 border-primay border" style="border-radius:50px 50px 50px 50px ">
                    <i class="fa fa-user text-primary i"></i>
                    <span><strong><?php print $email; ?></strong></span>
                </span>
                
                <div class="div" style="height:5rem;"></div>
                <h3 class="px-3">Help us in journey of Trust</h3><br>
                <h6 class="px-3">Check your email above to confirm email ownership</h6>
            </div>
    </div>
</div>
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
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/bootstrap.bundle.js"></script>
</html>
<?php

    }else{
        print "Your account already exisit";
    }
}
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $_SESSION['error'] = "Please enter Valid Email";
    header("location:../signup.php");
}
if(empty($fname)){
    $_SESSION['error'] = "Please First name is required!";
    header("location:../signup.php");
}
if(empty($lname)){
    $_SESSION['error'] = "Please Last name is required!";
    header("location:../signup.php");
}
if(empty($email)){
    $_SESSION['error'] = "Please Email is required!";
    header("location:../signup.php");
}
if(empty($pass)){
    $_SESSION['error'] = "Please Password is required!";
    header("location:../signup.php");
}

?>