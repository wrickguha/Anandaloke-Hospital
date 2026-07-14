<?php 
include("include/auth.php");
include('include/db-config.php');
include('include/function.php');
if(isset($_POST['submit'])){
	$department=$_POST['department'];
	$doctor=$_POST['doctor'];
	$opd=$_POST['opd'];
	$location=$_POST['location'];
	$status=0;
	$date=date('Y-m-d');
	/*---sanitize post data---*/
	$department=sanitize($con,$department);
	$doctor=sanitize($con,$doctor);
	$opd=sanitize($con,$opd);
	$location=sanitize($con,$location);
	
	$sql="INSERT INTO doctors SET 
	department_id='".$department."',
	doctor_name='".$doctor."',
	opd_time='".$opd."',
	location='".$location."',
	status='".$status."',
	date='".$date."'";
	$run_query=$con->query($sql);
	
	if($run_query){
		$msg="<span class='success ml20'>Doctors Details added done.</span>";
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
<title>Add Doctors Details</title>
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
<h3 class="content-header-title">Add Doctors Details</h3>
</div>
<div class="content-header-right col-md-8 col-12">
<div class="breadcrumbs-top float-md-right">
<div class="breadcrumb-wrapper mr-1">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item"><a href="#">Add Doctors Details</a></li>
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
<h4 class="card-title">Add Doctors Details</h4>
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
<form class="needs-validation" action="" method="post">
<div class="form-row">
<div class="col-md-3 mb-3">
<label for="validationTooltip01">Department</label>
<select name="department" class="form-control" required>
<option value="">Choose Department</option>
<?php 
$sql=$con->query("SELECT * FROM department ORDER BY id ASC");
while($row=$sql->fetch_assoc()){
extract($row);
?>
<option value="<?php echo $id;?>"><?php echo $department;?></option>
<?php } ?>
</select>

</div>
<div class="col-md-3 mb-3">
<label for="validationTooltip01">Doctor's Name</label>
<input type="text" class="form-control" placeholder="Doctor's Name" name="doctor" required >
</div>
<div class="col-md-3 mb-3">
<label for="validationTooltip04">OPD Time</label>
<input type="text" class="form-control" placeholder="OPD Time" name="opd" required >
</div>
<div class="col-md-3 mb-3">
<label for="validationTooltip04">Location</label>
<div class="form-group">
<input type="text" class="form-control" placeholder="Location" name="location" required >
</div>
</div>
</div>
<div class="col-md-4 offset-5">				
<button class="btn btn-success" type="submit" name="submit">Add Doctor's Details</button>
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