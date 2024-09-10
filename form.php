<?php
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']
$email_from = 'hetaudacitycollege@gmail.com';

$email_subject = 'form submission';

$email_body = "User name : $name.\n".
              "User email : $visitor_email.\n".
              "subject : $subject.\n".
              "message :$message .\n";
 $to = 'ojhaiyarahul821@gmail.com';
  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  email($to,$email_subject,$email_body,$headers);
  
  header("Location:contact.html");
?>