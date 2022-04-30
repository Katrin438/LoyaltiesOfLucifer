<?php //checking if user is subscribed or not
        $customerID=$_SESSION['customerID'];
        $checkSub="select subscription from newsletter where customerID = $customerID "; 
        $resultsSub=mysqli_query($db_connection, $checkSub);
        $fetchBSub = mysqli_fetch_assoc($resultsSub);
        $_SESSION['subscription'] = $fetchBSub['subscription'];
        $subscription = $_SESSION['subscription'];
?>
    <?php 
    $userEmail = ""; //first we leave email field blank
    if(isset($_POST['subscribe'])){ //if subscribe btn clicked
      $userEmail = mysqli_real_escape_string($db_connection, $_POST['email']); //getting user entered email

      //$checkEmail = "SELECT * FROM customer WHERE email=$userEmail";
      //$runSql = mysqli_query($db_connection, $checkEmail);
      if($email === $userEmail){
        $subject = "Thanks for Subscribing to us - Loyalties of Lucifer ";
        $message = "Thanks for subscribing to our newsletter. You'll always receive updates from us about our new rewards or/and challenges. And we won't share and sell your information. - Loyaltes of Lucfer";
        //php function to send mail

        $your_pcn="450256"; //Fill in your PCN number (6 numbers)
        $your_name="Loyalties of Lucifer"; //Fill in your name
        $recipient_emailaddress= $userEmail; //Fill in the emailaddress of the recipient
        $recipient_name="Dear Customer"; //Fill in the name of the recipient
        $subject= $subject; //Fill in the subject
        $html_body= $message ;//Fill in the HTML content
        $text_body= $message ;//Fill in the textual content
        
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
           // echo 'Mailer Error: ' . $mail->ErrorInfo; //UNCOMMENT FOR DEBUG
            $mailNotSent = "Failed while sending your mail!";



        } else {
            $mailSent = "Thanks for Subscribing us.";
            if($mailSent){
            $sqlAddSub = "UPDATE newsletter SET subscription = true WHERE customerID = $customerID ";
            $check=mysqli_query($db_connection,$sqlAddSub);  
           
            $_SESSION["subscribe"]=true;
            header("Location: index.php");
            
            //Do something when the message is send!
           // echo 'Message sent!'; //UNCOMMENT FOR DEBUG
            
            exit();
          }
        }
        //<!-- show error message if user entered email is not valid -->
       } else {
          $notValid = "$userEmail is not a valid email address!";
        }
      
    }
    ?>