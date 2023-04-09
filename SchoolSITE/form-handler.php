<?php
$name=$_POST[''];
$visitor_email=$_POST[''];
$subject=$_POST[''];
$message=$_POST[''];

$email_from='info@om117.github.io';

$email_subject='New Form Submission';

$email_body= "User Name: $name.\n".
                "User Email: $visitor_email.\n". 
                "User Subject: $subject.\n". 
                "User Message: $message.\n";

$to = 'omjadav2002@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contactus.html")
?>