<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require "phpmailer/Exception.php";
require "phpmailer/PHPMailer.php";
require "phpmailer/SMTP.php";

//Change these parameters for your configuration
$your_pcn="450256"; //Fill in your PCN number (6 numbers)
$your_name="Ali"; //Fill in your name
$recipient_emailaddress="udiac2021@gmail.com"; //Fill in the emailaddress of the recipient
$recipient_name="Loyalties of Lucifer"; //Fill in the name of the recipient
$subject="Password Reset Code"; //Fill in the subject
$html_body=""; //Fill in the HTML content
$text_body=""; //Fill in the textual content

//Actual sending of the mail
$mail=new PHPMailer();
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->isSMTP();
$mail->Host="mailrelay.fhict.local";
$mail->Port=25;    
$mail->SMTPAuth=false;
$mail->setFrom("i".$your_pcn."@hera.fhict.nl",$your_name); //PUT YOUR I-account number here
$mail->addReplyTo("i".$your_pcn."@hera.fhict.nl",$your_name);
$mail->addAddress($recipient_emailaddress,$recipient_name);
$mail->Subject=$subject;
$mail->isHTML(true);                                  
$mail->Body=$html_body;
$mail->AltBody=$text_body;
if(!$mail->send()){
    //Do something when the message is not send
    //echo 'Mailer Error: ' . $mail->ErrorInfo; //UNCOMMENT FOR DEBUG
} else {
    //Do something when the message is send!
    //echo 'Message sent!'; //UNCOMMENT FOR DEBUG
}
?>