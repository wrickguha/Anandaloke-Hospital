<?php

$message21="test msg2";
echo($message21);
$senderemail="sonoscan@anandaloke.com,info@anandaloke.com";
$senderbccemail="arisaha.usa@gmail.com";
//$senderemail="gnmadmission@anandaloke.com";
//$senderbccemail="webproinfotech1@gmail.com";

### Headers
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: Appointment Request <info@anandaloke.com>\r\n";
$headers .= 'Bcc:'.$senderbccemail."\r\n";
### subject
$subject= 'Appointment Request (Anandaloke Hospital)';
$mailsend=mail($senderemail, $subject, $message21, $headers);

?>