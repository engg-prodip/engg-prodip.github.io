<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$message = wordwrap($message,70);   
// Create the email and send the message
$to = 'engg.prodip@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Github Contact Form:  $name, Email: $email_address, Phone: $phone";
$email_body = "$message";
// This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
// Always set content-type when sending HTML email

$from = "prodip@orangetechltd.com";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers = "From:" . $from;   
mail($to,$email_subject,$email_body, $headers);
return true;         
?>
