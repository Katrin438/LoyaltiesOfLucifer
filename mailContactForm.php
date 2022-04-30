<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require "phpmailer/Exception.php";
require "phpmailer/PHPMailer.php";
require "phpmailer/SMTP.php";
include("conection.php");
?>
<?php
if(isset($_POST['btn_contact'])){ 
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $emailFrom = $_POST['email'];
   $message = $_POST['message'];
   $subjectForm = $_POST['subject'];

   $your_pcn="450256"; //Fill in your PCN number (6 numbers)
$your_name=$firstname; //Fill in your name
$recipient_emailaddress="udiac2021@gmail.com"; //Fill in the emailaddress of the recipient
$recipient_name=$firstname; //Fill in the name of the recipient
$subject= $subjectForm; //Fill in the subject
$html_body=$message; //Fill in the HTML content
$text_body=$message; //Fill in the textual content

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
header("Location: contact.php?messageSent=done");
if(!$mail->send()){
    //Do something when the message is not send
    //echo 'Mailer Error: ' . $mail->ErrorInfo; //UNCOMMENT FOR DEBUG


   
} else {
    //Do something when the message is send!
    //echo 'Message sent!'; //UNCOMMENT FOR DEBUG

}
}
?>