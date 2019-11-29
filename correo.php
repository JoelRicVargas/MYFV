<?php

//https://github.com/PHPMailer/PHPMailer

$correo = $_POST["email"];


$body = "Un usuario quiere contactar contigo su correo es: " . $correo;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Phpmailer/Exception.php';
require 'Phpmailer/PHPMailer.php';
require 'Phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'advanced.technology.peru@gmail.com';                     // SMTP username
    $mail->Password   = 'Huellita2097';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($correo);
    $mail->addAddress('advanced.technology.peru@gmail.com', 'Usuario de MYFV');     // Add a recipient
    
  
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Correo MYFV ';
    $mail->Body    = $body;
    

    $mail->send();

    header('Location: index.html');
    //echo 'Message has been sent';
     } 
    catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>
   


   