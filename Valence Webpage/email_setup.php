<?php
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;

function sendMail($sendMailAdress, $sendMailName, $sendMailSubject, $sendMailMessage) { 
 
 
 
    require 'PHPMailer/src/Exception.php'; 
    require 'PHPMailer/src/PHPMailer.php'; 
    require 'PHPMailer/src/SMTP.php'; 

    $mail = new PHPMailer();   
    $mail->isSMTP();                                            //Send using SMTP 
    $mail->Host       = 'smtp.valenceworks.com';                     //Set the SMTP server to send through 
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication 
    $mail->Username   = 'admin@thinkspace.valenceworks.com';                     //SMTP username 
    $mail->Password   = 'th1nkspaceadmin';                               //SMTP password 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;;            //Enable implicit TLS encryption 
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you  

    //Recipients 
    $mail->setFrom('admin@thinkspace.valenceworks.com', 'Valence Works'); 
    $mail->addAddress($sendMailAdress, $sendMailName);     //Add a recipient 

    //Content 
    $mail->isHTML(true);                                  //Set email format to HTML 
    $mail->Subject = $sendMailSubject; 
    $mail->Body    = $sendMailMessage; 
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; 

    if(!$mail->send()) { 
        return false; 
    } else { 
        return true; 
    }     
}






?>