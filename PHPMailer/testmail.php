<?php
/**
 * This example shows sending a message using a local sendmail binary.
 */

require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP(); 
$mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.zoho.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is depracated
$mail->SMTPAuth = true;
$mail->Username = 'info@unibiosys.in';
$mail->Password = 'unibio1234';



//Create a new PHPMailer instance

// Set PHPMailer to use the sendmail transport
// $mail->isSendmail();
//Set who the message is to be sent from
$mail->setFrom('info@unibiosys.in', 'First Last');
//Set an alternative reply-to address
$mail->addReplyTo('info@unibiosys.in', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('freelancermanig@gmail.com', 'freelancermanig');
//Set the subject line
$mail->Subject = 'PHPMailer sendmail test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML('<h1>test</h1>');
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
 

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent! 1111222";
}
