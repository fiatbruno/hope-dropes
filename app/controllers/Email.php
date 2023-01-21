<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

//Load Composer's autoloader
require 'vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 3;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'fiatbr@gmail.com';                     //SMTP username
    $mail->Password   = 'pass';                               //SMTP password
    $mail->SMTPSecure = "tls";         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = adfasdf;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients

    $mail->setFrom('fiatbruno96@gmail.com', 'Hope Drops');
    $mail->addAddress($_SESSION['email'], $_SESSION['username']);     //Add a recipient
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
    
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Blood Donation';
    $mail->Body    = "<h1>Blood Donation</h1><br><p>Hello". $_SESSION['username'] ."</p><p>The blood donation appointment is on <b>18/06/2021</b></p>";
    $mail->AltBody = 'The blood donation appointment is on ||18/06/2021||';

    $mail->send();
    
    $this->session->set_flashdata("success", " Email sent successfully ! :)");   

} catch (Exception $e) {

    $this->session->set_flashdata("error", "Email wasn't sent ! :( {$mail->ErrorInfo}");
}

// Redirect to profile page
redirect('user/profile', 'refresh');
