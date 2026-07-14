<?php 
include("include/auth.php");
include('include/db-config.php');
include('include/function.php');
if(isset($_POST['submit'])){
	$category=$_POST['category'];
	$caption=$_POST['caption'];
	/*---product image---*/
	$imgFile = $_FILES['file']['name'];
	$tmp_dir = $_FILES['file']['tmp_name'];
	$imgSize = $_FILES['file']['size'];	
	/*---sanitize post data---*/
	$category=sanitize($con,$category);
	$caption=sanitize($con,$caption);
	if(empty($imgFile)){
		$postpic='';
	}
	else
	{
		$upload_dir = '../images/gallery/';
		$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
		$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); 
		$postpic = rand(1000,1000000).".".$imgExt;
		if(in_array($imgExt, $valid_extensions)){
			if($imgSize < 1500000)				{
				move_uploaded_file($tmp_dir,$upload_dir.$postpic);
			}
			else{
				$msg = "<div class='error'>Sorry, your image file is too large. max-size 145KB.</div>";
			}
		}
		else{
			$msg = "<div class='error'>Sorry, only JPG, JPEG, PNG &amp; GIF files are allowed.</div>";		
		}
	}
	if(!isset($msg))
	{
	$sql="INSERT INTO photo SET 
	category='".$category."',
	name='".$caption."',
	file='".$postpic."'";
	$run_query=$con->query($sql);
	if($run_query){
		$msg="<span class='success ml20'>Gallery image insert successfully.</span>";
	}
	else{
		$msg="<span class='error ml20'>Something went wrong...</span>";
	}
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
<title>Add Gallery</title>
<?php include "style.php";?>
<style>.error{color:red;}.ml20{margin-left: 20px;}</style>
</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">
<?php include "header.php";?>
<?php include "menubar.php";?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-wrapper-before"></div>
<div class="content-header row">
<div class="content-header-left col-md-4 col-12 mb-2">
<h3 class="content-header-title">Add Gallery</h3>
</div>
<div class="content-header-right col-md-8 col-12">
<div class="breadcrumbs-top float-md-right">
<div class="breadcrumb-wrapper mr-1">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item"><a href="#">Add Gallery</a></li>
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
<h4 class="card-title">Add Gallery</h4>
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
<div class="col-md-4 mb-3">
<label for="validationTooltip01">Select Album</label>
<select class="form-control" name="category" required>
<option value="">Select Album</option>
<?php 
$select_album	=	$con->query("SELECT * FROM `album_name`");
while($album 	= $select_album->fetch_assoc())
{
?>
<option value="<?php echo $album['id'];?>"><?php echo $album['name'];?></option>
<?php } ?>
</select>
</div>

<div class="col-md-4 mb-3">
<label for="validationTooltip01">Photo Name</label>
<input type="text" class="form-control" id="validationTooltip01" placeholder="Photo Name" name="caption" required>

</div>
<div class="col-md-4 mb-3">
<label for="validationTooltip04">Image</label>
<input type="file" class="form-control" name="file" required>
</div>
</div>
<button class="btn btn-success" type="submit" name="submit">Upload Images</button>
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