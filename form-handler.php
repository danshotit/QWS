<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'info@neemafoundation.org';

$email_subject = 'New form submission';

$email_body = "user name: $name.\n".
    $email_body = "user email: $visitor_email.\n".
                    "user name: $name.\n".
                      "user message: $message.\n";

$to = 'danshotit@gmail.com';

$headers = "From: $email_from\r\n";

$headers .="Reply To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")
?>