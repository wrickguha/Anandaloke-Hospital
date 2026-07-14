<?php
	$name = $_POST['name'];
	$qualification = $_POST['qualification'];
	$board = $_POST['board'];
	$year = $_POST['year'];
	$percentage = $_POST['percentage'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$contact  = $_POST['contact'];
	$contact2  = $_POST['contact2'];
	$address = $_POST['address'];
	
 
$message21 = <<< EOH
<table width="350" border="1" cellpadding="2" cellspacing="2" style="font:12px Arial; color:#8d8c8b; line-height:28px;">
<tr><td colspan="3" style="color:#f9a615; font-size:18px; height:30px;">GNM Admission</td></tr>
  <tr>
    <td width="118" ><b>Name :</b></td> 
    <td width="212" colspan="2">$name</td>
  </tr>
  <tr>
    <td><b>Qualification :</b></td>
    <td colspan="2">$qualification</td>
  </tr>
  <tr>
    <td><b>Board :</b></td>
    <td colspan="2">$board</td>
  </tr>
   
   <tr>
    <td><b>Passing Year :</b></td>
    <td colspan="2">$year</td>
  </tr>
  <tr>
    <td><b>10+2 Percentage :</b></td>
    <td colspan="2">$percentage</td>
  </tr>
  <tr>
    <td><b>Date of Birth :</b></td>
    <td colspan="2">$dob</td>
  </tr>
  <tr>
    <td><b>Email :</b></td>
    <td colspan="2">$email</td>
  </tr>
  <tr>
    <td><b>Contact No. :</b></td>
    <td colspan="2">$contact</td>
  </tr>
  <tr>
    <td><b>Contact No. :</b></td>
    <td colspan="2">$contact2</td>
  </tr>
   <tr>
    <td><b>Postal Address :</b></td>
    <td colspan="2">$address</td>
  </tr>
  
</table>
 

EOH;
//echo($message21);
$senderemail="gnmadmission@anandaloke.com,info@anandaloke.com,arisaha.usa@gmail.com,goon.sanghamitra@gmail.com";
$senderbccemail="arisaha.usa@gmail.com";
//$senderemail="gnmadmission@anandaloke.com";
//$senderbccemail="webproinfotech1@gmail.com";

### Headers
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: GNM Admission 2018<info@anandaloke.com>\r\n";
$headers .= 'Bcc:'.$senderbccemail."\r\n";
### subject
$subject= 'GNM Admission 2018(Anandaloke School of Nursing)';
$mailsend=mail($senderemail, $subject, $message21, $headers);
//echo $mailsend;
header('Location: thanks.php');

?>
