<?php 
include("include/auth.php");
include('include/db-config.php');
include('include/function.php');
if(isset($_GET['eid']) && !empty($_GET['eid']))
	{
		$id = trim($_GET['eid']);
		$edit = "SELECT  * FROM `doctors` WHERE `id`='$id'";
		$query=$con->query($edit);
		$fetch_row=$query->fetch_assoc();
		extract($fetch_row);
	}
	else
	{
		header("Location: view-doctor.php");
	}	
	if(isset($_POST['update']))
	{
		$department=$_POST['department'];
		$doctor=$_POST['doctor'];
		$opd=$_POST['opd'];
		$location=$_POST['location'];
		/*---sanitize post data---*/
		$department=sanitize($con,$department);
		$doctor=sanitize($con,$doctor);
		$opd=sanitize($con,$opd);
		$location=sanitize($con,$location);				

		$stmt = "UPDATE `doctors` SET 
		department_id='".$department."',
		doctor_name='".$doctor."',
		opd_time='".$opd."',
		location='".$location."' 
		WHERE `id`='".$id."'";
		$update=$con->query($stmt);			
		if($update){
			?>
			<script>
			alert('Successfully Updated ...');
			window.location.href='view-doctor.php';
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
<title>Edit Doctor</title>
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
<h3 class="content-header-title">Add Room Details</h3>
</div>
<div class="content-header-right col-md-8 col-12">
<div class="breadcrumbs-top float-md-right">
<div class="breadcrumb-wrapper mr-1">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item"><a href="#">Edit Doctor</a></li>
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
<h4 class="card-title">Edit Doctor</h4>
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
<form  method="post" enctype="multipart/form-data">
<div class="form-row">
<div class="col-md-3 mb-3">
<label for="validationTooltip01">Department</label>
<select name="department" class="form-control" required>
<?php
$get_ctname=$con->query("SELECT * FROM department ORDER BY `id` ASC") or die("MYSQL ERROR!");
while($get_ctname_or=$get_ctname->fetch_assoc())
{
?>
<option value="<?php echo $get_ctname_or['id'];?>" <?php if($get_ctname_or['id']==$department_id) { ?> selected <?php } ?> ><?php echo $get_ctname_or['department'];?></option>
<?php 
}
?>
</select>

</div>
<div class="col-md-3 mb-3">
<label for="validationTooltip01">Doctor's Name</label>
<input type="text" class="form-control" value="<?php echo $doctor_name;?>" name="doctor" required >
</div>
<div class="col-md-3 mb-3">
<label for="validationTooltip04">OPD Time</label>
<input type="text" class="form-control" value="<?php echo $opd_time;?>" name="opd" required >
</div>
<div class="col-md-3 mb-3">
<label for="validationTooltip04">Location</label>
<div class="form-group">
<input type="text" class="form-control" value="<?php echo $location;?>" name="location" required >
</div>
</div>
</div>
<div class="col-md-4 offset-5">				
<input  class="btn btn-success" type="submit" name="update" value="Update Doctor's Details">
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