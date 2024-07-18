<?php
$name = $_POST['name'];
$visitors_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'anusekar1905@gmail.com';
$email_subject = 'new Form Submission';
$email_body = "user_name:$name.\n".
               "user_email:$visitors_email.\n".
               "subject:$subject.\n".
                "user_message:$message.\n";
$to= 'smartbalaaravindh@gmail.com';
$headers= "From: $email_from \r\n";
$headers= "Reply-To: $visitors_email \r\n"

mail($to,$email_subject,$email_body,$headers);

header ("Location: contact.html");
?>