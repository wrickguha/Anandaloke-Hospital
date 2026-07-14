<?php 
include("include/auth.php");
include('include/db-config.php');
include('include/function.php');
if(isset($_POST['submit'])){
	$title=$_POST['title'];
	$url=$_POST['url'];
	$status=0;
	$date=date('Y-m-d');
	/*---product image---*/
	$imgFile = $_FILES['file']['name'];
	$tmp_dir = $_FILES['file']['tmp_name'];
	$imgSize = $_FILES['file']['size'];	
	/*---sanitize post data---*/
	$title=sanitize($con,$title);
	$url=sanitize($con,$url);
	if(empty($imgFile)){
		$postpic='';
	}
	else
	{
		$upload_dir = '../pdf/';
		$fileName = strtolower($imgFile);
		$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
		$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf'); 
		$postpic = $fileName.".".$imgExt;
		if(in_array($imgExt, $valid_extensions)){
			if($imgSize < 1500000)				{
				move_uploaded_file($tmp_dir,$upload_dir.$postpic);
			}
			else{
				$msg = "<div class='error'>Sorry, your file is too large. max-size 145KB.</div>";
			}
		}
		else{
			$msg = "<div class='error'>Sorry, only JPG, JPEG, PNG, GIF &amp; PDF files are allowed.</div>";		
		}
	}
	if(!isset($msg))
	{
	$sql="INSERT INTO latest_news SET 
	news_title='".$title."',
	news_url='".$url."',
	file='".$postpic."',
	status='".$status."',
	date='".$date."'";
	$run_query=$con->query($sql);
	if($run_query){
		$msg="<span class='success ml20'>Latest News insert successfully.</span>";
	}
	else{
		$msg="<span class='error ml20'>Something went wrong(Mysqli Error).</span>";
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
<title>Add Latest News</title>
<?php include "style.php";?>

<style>.error{color:red;}.ml20{margin-left: 20px;}.success{color: #01eb64 !important;font-size: 16px;font-weight:600;} .mb-3{margin-bottom:1.5rem !important}</style>

</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">
<?php include "header.php";?>
<?php include "menubar.php";?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-wrapper-before"></div>
<div class="content-header row">
<div class="content-header-left col-md-4 col-12 mb-2">
<h3 class="content-header-title">Add Latest News</h3>
</div>
<div class="content-header-right col-md-8 col-12">
<div class="breadcrumbs-top float-md-right">
<div class="breadcrumb-wrapper mr-1">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item"><a href="#">Add Latest News</a></li>
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
<h4 class="card-title">Add Latest News</h4>
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
<label for="validationTooltip01">News Title</label>
<input type="text" class="form-control" id="validationTooltip01" placeholder="News Title" name="title" required />
</div>
<div class="col-md-4 mb-3">
<label for="validationTooltip01">News url</label>
<input type="text" class="form-control" id="validationTooltip01" placeholder="News url" name="url" required />
</div>
<div class="col-md-4 mb-3">
<label for="validationTooltip04">News File(PDF,Image)</label>
<input type="file" class="form-control" name="file">
</div>
</div>
<div class="col-md-4 offset-5">	
<button class="btn btn-success" type="submit" name="submit">Sumit Latest News</button>
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