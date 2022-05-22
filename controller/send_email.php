<?php
session_start();
// assign session data to var
$data = $_SESSION['mailing'];

$message       = $data['body'];
$title      = $data['title'];
$receiver   = $data['receiver'];
// return var_dump($data);
//define user credential
define('SENDER','jadoiconic@gmail.com');
define('PASSWORD','sndrec123451');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "../PHPMailer/PHPMailer.php";
require "../PHPMailer/Exception.php";
require "../PHPMailer/SMTP.php";

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = SENDER;                     //SMTP username
    $mail->Password   = PASSWORD;                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom(SENDER, 'ICONIC');
    $mail->addAddress($receiver);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $title;
    $mail->Body    = $message;

    $mail->send();
    header("../confirm.php");

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}