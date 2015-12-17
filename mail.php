<?php
$to      = 'mehuljain160@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: mehul@coolbuddy.net46.net' . "\r\n" .
    'Reply-To: mehul@coolbuddy.net46.net' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers))
{
print "mail sent";
}


?>