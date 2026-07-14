<?php 
include("include/auth.php");
include('include/db-config.php');
//include('include/function.php');
/*if(isset($_POST['submit']))
 	{
	$name=$_POST['name'];	
	$year = date('Y');
	$name=sanitize($con,$name);
	$insert="INSERT INTO album_name SET name='".$name."', year='".$year."'";	
	$run=$con->query($insert);
	if($run)
		{
		$msg="<span class='success ml20'>Album Added successfully.</span>";			
		}
	else
		{
		$msg="<span class='error ml20'>Something went wrong...</span>";
		}
	}*/
?>
<?php 
 //FORM SUBMISSION
 if(isset($_POST['submit']))
 	{
	$name=$con->real_escape_string(trim($_POST['name']));		
	$year = date("Y");
	$insert_query="INSERT INTO album_name VALUES(0,'".$name."','".$year."')";	
		
	if($con->query($insert_query))
		{
		$msg="<span class='success ml20'>Album Added successfully.</span>";				
		}
	else
		{
		$msg="<span class='error ml20'>Something went wrong...</span>";
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
<title>Add Album</title>
<?php include "style.php";?>
<style>.error{color:red;}.ml20{margin-left: 20px;}.mt-28{margin-top:28px}</style>
</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">
<?php include "header.php";?>
<?php include "menubar.php";?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-wrapper-before"></div>
<div class="content-header row">
<div class="content-header-left col-md-4 col-12 mb-2">
<h3 class="content-header-title">Add Album</h3>
</div>
<div class="content-header-right col-md-8 col-12">
<div class="breadcrumbs-top float-md-right">
<div class="breadcrumb-wrapper mr-1">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item"><a href="#">Add Album</a></li>
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
<h4 class="card-title">Add Album</h4>
<a class="heading-elements-toggle"> <i class="la la-ellipsis-v font-medium-3"></i> 
</a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"> <i class="ft-minus"></i> </a></li>
<li><a data-action="reload"> <i class="ft-rotate-cw"></i> </a></li>
<li><a data-action="expand"> <i class="ft-maximize"></i> </a></li>
<li><a data-action="close"> <i class="ft-x"></i> </a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<?php if(isset($msg)){echo $msg;}?>
<div class="card-body">
<form action="" method="post">
<div class="form-row">
<div class="col-md-4">
<label for="validationTooltip01">Album name</label>
<input type="text" class="form-control" placeholder="Album Name" name="name" required>
</div>
<div class="col-md-3">
<button class="btn btn-success mt-28" type="submit" name="submit">Add Album</button>
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