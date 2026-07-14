<?php
include('backend/include/db-config.php');
session_start();
if(isset($_POST["ccaptcha"])&&$_POST["ccaptcha"]!=""&&$_SESSION["appointcode"]==$_POST["ccaptcha"])
{		
$name=$con->real_escape_string($_POST['name']);
$email=$con->real_escape_string($_POST['email']);
$phone=$con->real_escape_string($_POST['phone']);
$age=$con->real_escape_string($_POST['age']);
$gender=$con->real_escape_string($_POST['gender']);
$department=$con->real_escape_string($_POST['department']);
$doctor=$con->real_escape_string($_POST['doctor']);
$appoint_date=$con->real_escape_string($_POST['date']);
$enq_date=date('Y-m-d');
$status=0;
$sel=$con->query("SELECT department FROM department WHERE id='".$department."'");
while($row=$sel->fetch_assoc()){
$department_name=$row['department'];	
}
$sql="INSERT INTO appointment SET
`name`='".$name."',`email`='".$email."',`phone`='".$phone."',`age`='".$age."',`gender`='".$gender."',`department`='".$department_name."',`doctor`='".$doctor."',`appoint_date`='".$appoint_date."',`status`='".$status."',`enquiry_date`='".$enq_date."'";
$insert=$con->query($sql);
if($insert){
	    //Change this to your email account
		$to = 'opd.anandaloke@gmail.com';
		$message='<html>
				  	<head>
  						<title>New Appointment Enquiry from Anandaloke Hospital</title>
					</head>
					<body style="background:linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%) no-repeat;">
					<div style="width:600px;max-width:100%;background:#fff;padding:20px;border:1px solid #f8f8f8;margin:0 auto;border:5px solid #eee;border-radius:10px;">
					<h3 style="margin:0 0 10px;padding-bottom:5px;border-bottom:1px solid #ddd;">New Appointment Enquiry from Anandaloke Hospital</h3>					
					<p style="width:100%;background:#f8f8f8;padding:5px;border-right:3px solid #18c1c9;"><span style="width:40%;">Name </span>				    	:   '.$_POST['name'].'</p>
					<p style="width:100%;background:#f8f8f8;padding:5px;border-right:3px solid #18c1c9;"><span style="width:40%;">Phone No </span>			    	:   '.$_POST['phone'].'</p>
					<p style="width:100%;background:#f8f8f8;padding:5px;border-right:3px solid #18c1c9;"><span style="width:40%;">Email ID </span>			    	:   '.$_POST['email'].'</p>
					<p style="width:100%;background:#f8f8f8;padding:5px;border-right:3px solid #18c1c9;"><span style="width:40%;">Age </span>			    		:   '.$_POST['age'].'</p>
					<p style="width:100%;background:#f8f8f8;padding:5px;border-right:3px solid #18c1c9;"><span style="width:40%;">Gender </span>			    		:   '.$_POST['gender'].'</p>
					<p style="width:100%;background:#f8f8f8;padding:5px;border-right:3px solid #18c1c9;"><span style="width:40%;">Department </span>			    		:   '.$department_name.'</p>
					<p style="width:100%;background:#f8f8f8;padding:5px;border-right:3px solid #18c1c9;"><span style="width:40%;">Preferred Doctor </span>			    		:   '.$_POST['doctor'].'</p>
					<p style="width:100%;background:#f8f8f8;padding:5px;border-right:3px solid #18c1c9;"><span style="width:40%;">Appointment Date </span>				    	:   '.$_POST['date'].'</p>
					<p style="width:100%;background:#f8f8f8;padding:5px;border-right:3px solid #18c1c9;"><span style="width:40%;">Message </span>				    	:   '.$_POST['message'].'</p>
				</body>
				</html>';
		$name=$_POST['name'];
		$email=$_POST['email'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: ' . $email;
		$subject='New Appointment Enquiry from Anandaloke Hospital';
		$send_contact=mail($to,$subject,$message,$headers);
		if ($send_contact)
		{
	    echo "<script>location.replace('thank-you.php');</script>";
		}
		else
		{
		echo "There was an error";
		}
	}
}

	else
		{
		echo "<script>alert('Wrong Captcha Code');location.replace('/');</script>";
		}
		unset($_SESSION["appointcode"]);
