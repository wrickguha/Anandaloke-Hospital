<?php 
include("include/auth.php");
include('include/db-config.php');
include('include/function.php');
if(isset($_GET['eid']) && !empty($_GET['eid']))
	{
		$id = trim($_GET['eid']);
		$edit = "SELECT  * FROM `department` WHERE `id`='$id'";
		$query=$con->query($edit);
		$fetch_row=$query->fetch_assoc();
		extract($fetch_row);
	}
	else
	{
		header("Location: view-department.php");
	}	
	if(isset($_POST['update']))
	{
		$department=$_POST['department'];
		/*---sanitize post data---*/
		$department=sanitize($con,$department);				

		$stmt = "UPDATE `department` SET 
		department='".$department."' 
		WHERE `id`='".$id."'";
		$update=$con->query($stmt);				
		if($update){
			?>
			<script>
			alert('Successfully Updated ...');
			window.location.href='view-department.php';
			</script>
			<?php
		}
		else{
			$msg = "<div class='error'>Sorry Data Could Not Updated !</div>";
		}		
				
	}
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="">
<meta name="keywords" content="">
<title>View department</title>
<?php include "style.php";?>
<style>.error{color:red;}.ml20{margin-left: 20px;}textarea{width:100%;height:100px;padding:15px;border:1px solid #cacfe7}</style>
</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">
<?php include "header.php";?>
<?php include "menubar.php";?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-wrapper-before"></div>
<div class="content-header row">
<div class="content-header-left col-md-4 col-12 mb-2">
<h3 class="content-header-title">View department</h3>
</div>
<div class="content-header-right col-md-8 col-12">
<div class="breadcrumbs-top float-md-right">
<div class="breadcrumb-wrapper mr-1">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item"><a href="#">View department</a></li>
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
<h4 class="card-title">View department</h4>
<a class="heading-elements-toggle"> <i class="la la-ellipsis-v font-medium-3"></i> 
</a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li>
<a data-action="collapse"> <i class="ft-minus"></i> 
</a>
</li>
<li>
<a data-action="reload"> <i class="ft-rotate-cw"></i> 
</a>
</li>
<li>
<a data-action="expand"> <i class="ft-maximize"></i> 
</a>
</li>
<li>
<a data-action="close"> <i class="ft-x"></i> 
</a>
</li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<?php if(isset($msg)){echo $msg;}?>
<div class="card-body">
<form class="needs-validation" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<div class="form-row">
<div class="col-md-3 mb-3">
<label for="validationTooltip01">Department</label>
<select name="department" class="form-control" required>
<option <?php if($department=='NEURO-SURGERY') { ?> selected <?php } ?> value="NEURO-SURGERY">NEURO-SURGERY</option>
<option <?php if($department=='NEURO-MEDICINE') { ?> selected <?php } ?> value="NEURO-MEDICINE">NEURO-MEDICINE</option>
<option <?php if($department=='NEURO PSYCHIATRY') { ?> selected <?php } ?> value="NEURO PSYCHIATRY">NEURO PSYCHIATRY</option>
<option <?php if($department=='PLASTIC &amp; RECONSTRUCTIVE SURGERY') { ?> selected <?php } ?> value="PLASTIC &amp; RECONSTRUCTIVE SURGERY">PLASTIC &amp; RECONSTRUCTIVE SURGERY</option>
<option <?php if($department=='UROLOGY') { ?> selected <?php } ?> value="UROLOGY">UROLOGY</option>
<option <?php if($department=='NEPHROLOGY') { ?> selected <?php } ?> value="NEPHROLOGY">NEPHROLOGY</option>
<option <?php if($department=='GASTRO-ENTEROLOGY') { ?> selected <?php } ?> value="GASTRO-ENTEROLOGY">GASTRO-ENTEROLOGY</option>
<option <?php if($department=='CARDIOLOGY') { ?> selected <?php } ?> value="CARDIOLOGY">CARDIOLOGY</option>
<option <?php if($department=='CARDIO-VASCULAR') { ?> selected <?php } ?> value="CARDIO-VASCULAR">CARDIO-VASCULAR</option>
<option <?php if($department=='GENERAL &amp; LAPAROSCOPIC SURGERY') { ?> selected <?php } ?> value="GENERAL &amp; LAPAROSCOPIC SURGERY">GENERAL &amp; LAPAROSCOPIC SURGERY</option>
<option <?php if($department=='ORTHOPAEDIC') { ?> selected <?php } ?> value="ORTHOPAEDIC">ORTHOPAEDIC</option>
<option <?php if($department=='GYNAEOCOLOGY &amp; OBSTETRICS') { ?> selected <?php } ?> value="GYNAEOCOLOGY &amp; OBSTETRICS">GYNAEOCOLOGY &amp; OBSTETRICS</option>
<option <?php if($department=='OTORHINOLARYNGOLOGY (ENT)') { ?> selected <?php } ?> value="OTORHINOLARYNGOLOGY (ENT)">OTORHINOLARYNGOLOGY (ENT)</option>
<option <?php if($department=='INTERNAL MEDICINE') { ?> selected <?php } ?> value="INTERNAL MEDICINE">INTERNAL MEDICINE</option>
<option <?php if($department=='PAEDIATRICS &amp; NEONATOLOGY') { ?> selected <?php } ?> value="PAEDIATRICS &amp; NEONATOLOGY">PAEDIATRICS &amp; NEONATOLOGY</option>
<option <?php if($department=='EYE') { ?> selected <?php } ?> value="EYE">EYE</option>
<option <?php if($department=='PULMONOLOGY') { ?> selected <?php } ?> value="PULMONOLOGY">PULMONOLOGY</option>
<option <?php if($department=='ONCOLOGY') { ?> selected <?php } ?> value="ONCOLOGY">ONCOLOGY</option>
<option <?php if($department=='PAIN MANAGEMENT') { ?> selected <?php } ?> value="PAIN MANAGEMENT">PAIN MANAGEMENT</option>
<option <?php if($department=='DIETICIAN') { ?> selected <?php } ?> value="DIETICIAN">DIETICIAN</option>
<option <?php if($department=='SPEECH THERAPY &amp; AUDIOMETRY') { ?> selected <?php } ?> value="SPEECH THERAPY &amp; AUDIOMETRY">SPEECH THERAPY &amp; AUDIOMETRY</option>
</select>
</div>
<div class="col-md-3">				
<button class="btn btn-success" type="submit" name="update" style="margin-top:25px">Update Doctor's Details</button>
</div>
</div>

</form>
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