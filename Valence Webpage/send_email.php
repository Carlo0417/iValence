<?php 

include 'email_setup.php';

$email = $_POST['contact-email'];
$name = $_POST['contact-name'];
$em = "201980120@psu.palawan.edu.ph";
$message = 'Email:'.$email. $_POST['contact-message'];
// $em = "christiantabang@gmail.com";

$to = $em ;
$subject ='Philippine Statistics Authority';
// $message = "test test";
$headers = "from: PSA@gmail.com";

$sendMail = sendMail($to, 'PSA@gmail.com', 'PSU hostel Admin' , $message);

    if($sendMail == true)
    {
        header("Location: index.html");
    }

    else
    {
        echo "send failed they are no connection";
    }
                                     
?>