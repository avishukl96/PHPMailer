<?php 
//inclide required php files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
// Define name Space
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Calling sendMail Function which is defind below.
sendMail('avishukl96@gmail.com','Avanish Shukla','PHPMailer test','PHPMailer Body ');

// Function
function sendMail($to = 'avishukl96@gmail.com' , $from = 'Avanish Shukla' , $subject = 'default Subject', $body = "default Body"  ){
	// Create instence of php mailer
$mail = new PHPMailer();
// set mailer to use SMTP
$mail->isSMTP();

// define SMTP Host
$mail->Host = 'smtp.gmail.com';
// enable smtp authentication
$mail->SMTPAuth = true;
// set type of encryption (ssl/tls)
$mail->SMTPSecure = 'tls';
// set port to connect smtp 
$mail->Port = '587';
// set gmail username
$mail->Username = 'avishukl96@gmail.com';
// set gmail password
$mail->Password = 'mypassword';
// set email subject
$mail->Subject = $subject;
// set sender email
$mail->setFrom($from);
// Email Bodyy
$mail->Body = $body;
//add Recipient
$mail->addAddress($to);
//mail send
 
if($mail->Send()){
	echo 'mail sent';
}else{
	echo $mail->ErrorInfo;
}
//smtp close
$mail->smtpClose();

}




?>