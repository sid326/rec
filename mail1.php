<?php
// multiple recipients
$to  = 'mehuljain160@gmail.com' . ', '; // note the comma
$to .= 'jainmehul0031@gmail.com';

// subject
$subject = 'activate your account(Webarch recruitment)';

// message
$message = '
<html>
<head>
  <title>activate</title>
</head>	
<body>
  <p>please activate your account to furthur login to portal by clicking in the following link</p>
	<a href="">click here please</a>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


// Mail it
mail($to, $subject, $message, $headers);
?>