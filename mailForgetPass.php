
<?php
include("conection.php");

?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require "phpmailer/Exception.php";
require "phpmailer/PHPMailer.php";
require "phpmailer/SMTP.php";
    if(isset($_POST['but_forget'])){
      $email = mysqli_real_escape_string($db_connection, $_POST['email']);
      $check_email = "SELECT * FROM customer WHERE email='$email'";
      $run_sql = mysqli_query($db_connection, $check_email);
      if(mysqli_num_rows($run_sql) > 0){
          $code = rand(999999, 111111); //picke a random number 
          $insert_code = "UPDATE customer SET code = $code WHERE email = '$email'"; // insert the number to the databass
          $run_query =  mysqli_query($db_connection, $insert_code);
          if($run_query){
            $your_pcn="450256"; //Fill in your PCN number (6 numbers)
            $your_name="Loyalties of Lucifer"; //Fill in your name
            $recipient_emailaddress="$email"; //Fill in the emailaddress of the recipient
            $recipient_name="Dear Customer"; //Fill in the name of the recipient
            $subject="Password Reset Code"; //Fill in the subject
            $html_body="Your password reset code is $code"; //Fill in the HTML content
            $text_body="Your password reset code is $code"; //Fill in the textual content // email the code to users email
            
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
                echo 'Mailer Error: ' . $mail->ErrorInfo; //UNCOMMENT FOR DEBUG
            } else {
              header('location:user-opt.php');
                //Do something when the message is send!
                echo 'Message sent!'; //UNCOMMENT FOR DEBUG
                exit();
            }
          }
      }
      else{

        $massage_login = "Your email is not registered!";
        
        }
    }
