<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])){
      echo "No arguments Provided!";
      return false;
   }else{
        $name = $_POST['name'];
        $email_address = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        include("http://shadinmart.com/prodip/mail.php?name=".$name."&email=".$email_address."&phone=".$phone."&message=".$message);
        
        // Create the email and send the message
        //$to = 'engg.prodip@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
        //$email_subject = "Github Contact Form:  $name, Email: $email_address, Phone: $phone";
        //$email_body = "$message";
        // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
        // Always set content-type when sending HTML email
        //$headers = "MIME-Version: 1.0" . "\r\n";
        //$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        //$headers .= "Reply-To: $email_address";   
        //mail($to,$email_subject,$email_body, $headers);
        return true;
}
   
?>
