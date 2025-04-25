<?php session_start();

require 'PHPMailer/PHPMailerAutoload.php';
$name		=	$_REQUEST['name'];
$email		=	$_REQUEST['email'];
$mobile		=	$_REQUEST['mobile'];
$message    =	$_REQUEST['message'];	

$name		=	'Mani';
$email		=	'test@gmail.com';
$mobile		=	'4343434';
$message    =	'te';

$message = '
<html>
<body bgcolor="#DCEEFC">
<h1 style="color:#993; text-align:center;">From www.unibiosys.in Website- Enquiry </h1>
<table align="center" cellpadding="10" border="1">
<tr><td>Name</td><td>'.$name.'</td></tr>
<tr><td>Email</td><td>'.$email.'</td></tr>
<tr><td>Mobile No</td><td>'.$mobile.'</td></tr>
<tr><td>Requirements</td><td>'.$message.'</td></tr>
</table>
</body></html>
';

$to = 'unibiosyslab@yahoo.com';
$mail = new PHPMailer;

$mail->isSMTP(); 
$mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.zoho.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is depracated
$mail->SMTPAuth = false;
$mail->Username = 'info@unibiosys.in';
$mail->Password = 'unibio1234';
$mail->setFrom('info@unibiosys.in', 'unibiosys.in');
//Set an alternative reply-to address
$mail->addReplyTo('info@unibiosys.in', 'unibiosys.in');
 
$mail->addAddress('freelancermanig@gmail.com', 'freelancermanig');
 
$mail->Subject = 'Hello! This is  Enquiry email From www.unibiosys.in Website';
 
$mail->msgHTML($message);
 
 
 
 

 
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent! 1111222";
}
// echo "<script>alert('Message Send Successfully');window.location='".$base_url."index.html';</script>";


?>
	
	
	
	
	
	
	
	