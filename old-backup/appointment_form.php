<?php
	$name = $_POST['name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$contact  = $_POST['contact'];
	$email = $_POST['email'];
	$specialty = $_POST['specialty'];
    $doctor = $_POST['doctor'];
	$date = $_POST['date'];
	
 
$message21 = <<< EOH
<table width="350" border="1" cellpadding="2" cellspacing="2" style="font:12px Arial; color:#8d8c8b; line-height:28px;">
<tr><td colspan="3" style="color:#f9a615; font-size:18px; height:30px;">Appointment Request</td></tr>
  <tr>
    <td width="100" ><b>Name :</b></td> 
    <td width="230" colspan="2">$name</td>
  </tr>
  <tr>
    <td><b>Age :</b></td>
    <td colspan="2">$age</td>
  </tr>
  <tr>
    <td><b>Gender :</b></td>
    <td colspan="2">$gender</td>
  </tr>
   <tr>
    <td><b>Contact :</b></td>
    <td colspan="2">$contact</td>
  </tr>
  <tr>
    <td><b>E-mail :</b></td>
    <td colspan="2">$email</td>
  </tr>
  <tr>
    <td><b>Specialty :</b></td>
    <td colspan="2">$specialty</td>
  </tr>
  <tr>
    <td><b>Doctor :</b></td>
    <td colspan="2">$doctor</td>
  </tr>
   <tr>
    <td><b>Preferred Date :</b></td>
    <td colspan="2">$date</td>
  </tr>
  
</table>
 

EOH;
//echo($message21);
//echo($message21);
$senderemail="meddirector@anandaloke.com,manager@anandaloke.com,sonoscan@anandaloke.com,info@anandaloke.com";
$senderbccemail="dr.khandelwal@anandaloke.com,anandaloke.srl@gmail.com";
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

header('Location: thanks.php');

?>
