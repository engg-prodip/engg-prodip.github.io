<?php
// Check for empty fields
if(empty($_REQUEST['name'])      ||
   empty($_REQUEST['email'])     ||
   empty($_REQUEST['phone'])     ||
   empty($_REQUEST['message'])   ||
   !filter_var($_REQUEST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }else{
        $name = strip_tags(htmlspecialchars($_REQUEST['name']));
        $email_address = strip_tags(htmlspecialchars($_REQUEST['email']));
        $phone = strip_tags(htmlspecialchars($_REQUEST['phone']));
        $message = strip_tags(htmlspecialchars($_REQUEST['message']));
        $message = wordwrap($message,70);   
        // Create the email and send the message
        $to = 'engg.prodip@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
        $email_subject = "Github Contact Form:  $name, Email: $email_address, Phone: $phone";
        $email_body = "$message";
        // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "Reply-To: $email_address";   
        mail($to,$email_subject,$email_body, $headers);
        return true;  
   }
?>