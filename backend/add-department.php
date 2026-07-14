<?php 
include("include/auth.php");
include('include/db-config.php');
include('include/function.php');
if(isset($_POST['submit'])){
	$department=$_POST['department'];
	$status=0;
	$date=date('Y-m-d');
	/*---sanitize post data---*/
	$department=sanitize($con,$department);
	
	$sql="INSERT INTO department SET 
	department='".$department."',
	status='".$status."',
	date='".$date."'";
	$run_query=$con->query($sql);
	if($run_query){
		$msg="<span class='success ml20'>Department added done.</span>";
	}
	else{
		$msg="<span class='error ml20'>Something went wrong(Mysqli Error).</span>";
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
<title>Add Department</title>
<?php include "style.php";?>
<style>.error{color:red;}.ml20{margin-left: 20px;}textarea{width:100%;height:100px;padding:15px;border:1px solid #cacfe7}.success{color: #01eb64 !important;font-size: 16px;font-weight:600;}.mb-3{margin-bottom:1.5rem !important}</style>
</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">
<?php include "header.php";?>
<?php include "menubar.php";?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-wrapper-before"></div>
<div class="content-header row">
<div class="content-header-left col-md-4 col-12 mb-2">
<h3 class="content-header-title">Add Department</h3>
</div>
<div class="content-header-right col-md-8 col-12">
<div class="breadcrumbs-top float-md-right">
<div class="breadcrumb-wrapper mr-1">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item"><a href="#">Add Department</a></li>
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
<h4 class="card-title">Add Department</h4>
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
<form class="needs-validation" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
<div class="form-row">
<div class="col-md-3 mb-3">
<label for="validationTooltip01">Department Name</label>
<input type="text" name="department" class="form-control" required/>
<select name="" class="form-control hidden">
<option value="">Choose Department</option>
<option value="NEURO-SURGERY">NEURO-SURGERY</option>
<option value="NEURO-MEDICINE">NEURO-MEDICINE</option>
<option value="NEURO PSYCHIATRY">NEURO PSYCHIATRY</option>
<option value="PLASTIC &amp; RECONSTRUCTIVE SURGERY">PLASTIC &amp; RECONSTRUCTIVE SURGERY</option>
<option value="UROLOGY">UROLOGY</option>
<option value="NEPHROLOGY">NEPHROLOGY</option>
<option value="GASTRO-ENTEROLOGY">GASTRO-ENTEROLOGY</option>
<option value="CARDIOLOGY">CARDIOLOGY</option>
<option value="CARDIO-VASCULAR">CARDIO-VASCULAR</option>
<option value="GENERAL &amp; LAPAROSCOPIC SURGERY">GENERAL &amp; LAPAROSCOPIC SURGERY</option>
<option value="ORTHOPAEDIC">ORTHOPAEDIC</option>
<option value="GYNAEOCOLOGY &amp; OBSTETRICS">GYNAEOCOLOGY &amp; OBSTETRICS</option>
<option value="OTORHINOLARYNGOLOGY (ENT)">OTORHINOLARYNGOLOGY (ENT)</option>
<option value="INTERNAL MEDICINE">INTERNAL MEDICINE</option>
<option value="PAEDIATRICS &amp; NEONATOLOGY">PAEDIATRICS &amp; NEONATOLOGY</option>
<option value="EYE">EYE</option>
<option value="PULMONOLOGY">PULMONOLOGY</option>
<option value="ONCOLOGY">ONCOLOGY</option>
<option value="PAIN MANAGEMENT">PAIN MANAGEMENT</option>
<option value="DIETICIAN">DIETICIAN</option>
<option value="SPEECH THERAPY &amp; AUDIOMETRY">SPEECH THERAPY &amp; AUDIOMETRY</option>
</select>

</div>
<div class="col-md-3">	
<button class="btn btn-success" type="submit" name="submit" style="margin-top:26px">Add Department</button>
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