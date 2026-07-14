<?php
	$title = $_POST['title'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone  = $_POST['phone'];
	$subject = $_POST['subject'];
    $message = $_POST['message'];
	
 
$message21 = <<< EOH
<table width="350" border="1" cellpadding="2" cellspacing="2" style="font:12px Arial; color:#8d8c8b; line-height:28px;">
<tr><td colspan="3" style="color:#f9a615; font-size:18px; height:30px;">Contact Form</td></tr>
  <tr>
    <td width="100" ><b>Name :</b></td> 
    <td width="230" colspan="2">$title $name</td>
  </tr>
  <tr>
    <td ><b>E-mail :</b></td>
    <td colspan="2">$email</td>
  </tr>
  <tr>
    <td ><b>Phone :</b></td>
    <td colspan="2">$phone</td>
  </tr>
   <tr>
    <td ><b>Subject :</b></td>
    <td colspan="2">$subject</td>
  </tr>
  <tr>
    <td ><b>Message :</b></td>
    <td colspan="2">$message</td>
  </tr>
  
</table>
 

EOH;
//echo($message21);
$senderemail="meddirector@anandaloke.com,manager@anandaloke.com";
$senderbccemail="webproinfotech1@gmail.com";

### Headers
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: Contact Form <info@anandaloke.com>\r\n";
$headers .= 'Bcc:'.$senderbccemail."\r\n";
### subject
$subject= 'Contact Form (Anandaloke Hospital)';
$mailsend=mail($senderemail, $subject, $message21, $headers);
header('Location: thanks.php');

?>
