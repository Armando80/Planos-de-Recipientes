<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'planosdrecipientes.ing@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "User Phone: $phone.\n".
              "User Message: $message.\n";

$to = 'fc.armando@outlook.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contacto.html");

?>