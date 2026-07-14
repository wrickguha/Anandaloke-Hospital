<?php 
include("include/auth.php");
include('include/db-config.php');
include('include/function.php');
$enqid=$_GET['id'];
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="">
<meta name="keywords" content="">
<title>View General Enquiry</title>
<?php include "style.php";?>
<style>.error{color:red;}.ml20{margin-left: 20px;}.success{color: #0050aa !important;font-size: 16px;font-weight:600;}
</style>
</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">
 <script type="text/javascript">
	function accom(id){
		if(confirm("Are you sure?")){
			location.replace('view-generalenquiry.php?accom&id='+id);
		}
	}
</script>
<?php
	if(isset($_GET['accom'])){
		$id		=		sanitize($con,$_GET['id']);
		$approve	=	$con->query("UPDATE generalenquiry SET status='A' WHERE `id`='$id'");
		if($approve){
			echo "<script>alert('Accomplised!');location.replace('generalenquiry-list.php?enquiry');</script>";
		}
	}
 ?>
<?php include "header.php";?>
<?php include "menubar.php";?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-wrapper-before"></div>
<div class="content-header row">
<div class="content-header-left col-md-4 col-12 mb-2">
<h3 class="content-header-title">View General Enquiry</h3>
</div>
<div class="content-header-right col-md-8 col-12">
<div class="breadcrumbs-top float-md-right">
<div class="breadcrumb-wrapper mr-1">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item"><a href="#">View General Enquiry</a></li>
</ol>
</div>
</div>
</div>
</div>
<div class="content-body">
<section class="input-validation">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">View General Enquiry</h4>
<a class="heading-elements-toggle"> <i class="la la-ellipsis-v font-medium-3"></i> 
</a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"> <i class="ft-minus"></i> </a></li>
<li><a data-action="reload"> <i class="ft-rotate-cw"></i> </a></li>
<li><a data-action="expand"> <i class="ft-maximize"></i> </a></li>
<li><a data-action="close"> <i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<?php if(isset($msg)){echo $msg;}?>
<div class="card-body">
<?php
$get_feedback_list=$con->query("SELECT * FROM `generalenquiry` WHERE `id`=$enqid");
while($feedback=$get_feedback_list->fetch_assoc())
{
?>
<form action="" method="post" style="width:50%;border:1px solid #ddd;padding:20px;margin-left:25%">
<div class="form-row">
<input type="hidden" id="id" name="edit_id" value="<?php echo $feedback['id'];?>" class="medium" readonly> 
<label class="col-md-3">Name</label>
<div class="form-group col-md-9">
 <input type="text" id="name" name="destination" value="<?php echo $feedback['name'];?>" class="medium" readonly>
</div>
<label class="col-md-3">Phone No</label>
<div class="form-group col-md-9">
<input type="text" id="phone" name="tourname" value="<?php echo $feedback['phone'];?>" class="medium" readonly>
</div>
<label class="col-md-3">Email ID</label>
<div class="form-group col-md-9">
<input type="text" name="email" value="<?php echo $feedback['email'];?>" class="medium" readonly> 
</div>
<label class="col-md-3">Subject</label>
<div class="form-group col-md-9">
<input type="text" name="subject" value="<?php echo $feedback['subject'];?>" class="medium" readonly> 
</div>
<label class="col-md-3">Message</label>
<div class="form-group col-md-9">
<input type="text" name="message" value="<?php echo $feedback['message'];?>" class="medium" readonly> 
</div>
<label class="col-md-3">Enquiry Date</label>
<div class="form-group col-md-9">
<input type="text" name="enqdate" value="<?php echo $feedback['enqdate'];?>" class="medium" readonly>
</div>
<label class="col-md-3">Status</label>
<div class="form-group col-md-9">
<?php
if($feedback['status']=='D')
{
?>
<a class="button-a blue" title="Marked Accomplished" style="cursor:pointer;line-height:30px;float:right;" onclick="accom(<?php echo $feedback['id']; ?>)">&#10003; MARK ACCOMPLISHED</a>
<?php
}
else
{
?>
<a class="button-a blue" title="Accomplished" style="cursor:pointer;color:#25b271 !important;float:right;">ACCOMPLISHED</a> 
<?php 
}
?>
</div>
</div>
</form>
 <?php } ?>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
<?php include "footer.php";?>
</body>

</html>