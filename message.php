<?php

  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $website = htmlspecialchars($_POST['website']);
  $message = htmlspecialchars($_POST['message']);

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'philiposun@gmail.com';                     //SMTP username
    $mail->Password   = 'secret';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('email', 'Your Name');
    $mail->addAddress($email);             
   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "$name";
    $mail->Body = "<!DOCTYPE html>
    <html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
            }
            .header {
                background-color: #007bff;
                color: #fff;
                text-align: center;
                padding: 10px;
            }
            .content {
                padding: 20px;
                background-color: #f9f9f9;
            }
            h1{
                color:#fff;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h1>My Name is $name</h1>
                <p>My Webiste <a href='$website' style='color:#fff;'>Click to view</a></p>
            </div>
            <div class='content'>
                <p>$message</p>
                <h3>My Phone Number $phone</h3>
            </div>
        </div>
    </body>
    </html>
    ";

    $mail->send();
    echo header("location:index.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>