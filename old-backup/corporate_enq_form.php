<?php
    $title = $_POST['title'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact  = $_POST['contact'];
	$category = $_POST['category'];
    $card = $_POST['card'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
 
$message21 = <<< EOH
<table width="480" border="1" cellpadding="2" cellspacing="2" style="font:12px Arial; color:#8d8c8b; line-height:28px;">
<tr><td colspan="3" style="color:#f9a615; font-size:18px; height:30px;">Corporate Enquery</td></tr>
  <tr>
    <td width="130" ><b>Name :</b></td> 
    <td width="350" colspan="2">$title$name</td>
  </tr>
  <tr>
    <td><b>Email :</b></td>
    <td colspan="2">$email</td>
  </tr>
  <tr>
    <td><b>Contact :</b></td>
    <td colspan="2">$contact</td>
  </tr>
   <tr>
    <td><b>Corporate Category :</b></td>
    <td colspan="2">$category</td>
  </tr>
  <tr>
    <td><b>Health Card No. :</b></td>
    <td colspan="2">$card</td>
  </tr>
  <tr>
    <td><b>Subject :</b></td>
    <td colspan="2">$subject</td>
  </tr>
  <tr>
    <td><b>Message :</b></td>
    <td colspan="2">$message</td>
  </tr>
     
</table>
 

EOH;
//echo($message21);
$senderemail="corporate@anandaloke.com,sonoscan@anandaloke.com";
$senderbccemail="pronob79@gmail.com";

### Headers
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: Corporate Enquery <info@anandaloke.com>\r\n";
$headers .= 'Bcc:'.$senderbccemail."\r\n";
### subject
$subject= 'Corporate Enquery (Anandaloke Hospital)';
$mailsend=mail($senderemail, $subject, $message21, $headers);
header('Location: thanks.php');

?>
