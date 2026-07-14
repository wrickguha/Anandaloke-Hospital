<?php 
include("include/auth.php");
include('include/db-config.php');
include('include/function.php');
if(isset($_POST['update'])){
	$company=sanitize($con,$_POST['company']);
	$website=sanitize($con,$_POST['website']);
	$phone1=sanitize($con,$_POST['phone1']);
	$phone2=sanitize($con,$_POST['phone2']);
	$phone3=sanitize($con,$_POST['phone3']);
	$fax=sanitize($con,$_POST['fax']);
	$tollfree=sanitize($con,$_POST['tollfree']);
	$whatsapp=sanitize($con,$_POST['whatsapp']);
	$email1=sanitize($con,$_POST['email1']);
	$email2=sanitize($con,$_POST['email2']);
	$email3=sanitize($con,$_POST['email3']);
	$facebook=sanitize($con,$_POST['facebook']);
	$google=sanitize($con,$_POST['google']);
	$twitter=sanitize($con,$_POST['twitter']);
	$youtube=sanitize($con,$_POST['youtube']);
	$blogurl=sanitize($con,$_POST['blogurl']);
	$address=sanitize($con,$_POST['address']);
	$sql="UPDATE site_information SET 
			website='".$website."',
			address='".$address."',
			phone1='".$phone1."',
			phone2='".$phone2."',
			phone3='".$phone3."',
			fax='".$fax."',
			tollfree='".$tollfree."',
			whatsapp='".$whatsapp."',
			email1='".$email1."',
			email2='".$email2."',
			email3='".$email3."',
			facebook='".$facebook."',
			googleplus='".$google."',
			youtube='".$youtube."',
			twitter='".$twitter."',
			blogurl='".$blogurl."',
			website_name='".$company."'";
	$query=$con->query($sql);
	if($query){
		$msg="<span class='success'>Information Added successfully.</span>";
	}
	else{
		$msg="<span class='error'>Something went wrong...</span>";
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
<title>Site Information</title>
<?php include "style.php";?>
<style>.error{color:red;}.ml20{margin-left: 20px;}.success{color: #01eb64 !important;font-size: 16px;font-weight:600;}
</style>
</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">
<?php include "header.php";?>
<?php include "menubar.php";?>
<div class="app-content content">
<div class="content-wrapper">
<div class="content-wrapper-before"></div>
<div class="content-header row">
<div class="content-header-left col-md-4 col-12 mb-2">
<h3 class="content-header-title">Site Information</h3>
</div>
<div class="content-header-right col-md-8 col-12">
<div class="breadcrumbs-top float-md-right">
<div class="breadcrumb-wrapper mr-1">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item"><a href="#">Site Information</a></li>
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
<h4 class="card-title">Site Information</h4>
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
<div class="card-content collapse show text-center">
<?php if(isset($msg)){echo $msg;}?>
<div class="card-body">
<?php 
$stmt="SELECT * FROM site_information";
$query=$con->query($stmt);
$row=$query->fetch_assoc();
?>
<form action="" method="post" style="width:50%;border:1px solid #ddd;padding:20px;margin-left:25%">
<div class="form-row">
<label class="col-md-3">Site Name</label>
<div class="form-group col-md-9">
<input type="text" class="form-control" placeholder="Company name" name="company" value="<?php echo $row['website_name'];?>" required>
</div>
<label class="col-md-3">Site url</label>
<div class="form-group col-md-9">
<input type="text" class="form-control" placeholder="Company Website" name="website" value="<?php echo $row['website']; ?>" required>
</div>
<label class="col-md-3">Phone No 1</label>
<div class="form-group col-md-9">
<input type="text" class="form-control" placeholder="Phone No" name="phone1" value="<?php echo $row['phone1']; ?>" required>
</div>
<label class="col-md-3">Phone No 2</label>
<div class="form-group col-md-9">
<input type="text" class="form-control" placeholder="Phone No" name="phone2" value="<?php echo $row['phone2']; ?>" >
</div>
<label class="col-md-3">Phone No 3</label>
<div class="form-group col-md-9">
<input type="text" class="form-control" placeholder="Phone No" name="phone3" value="<?php echo $row['phone3']; ?>">
</div>
<label class="col-md-3">Fax</label>
<div class="form-group col-md-9">
<input type="text" class="form-control" placeholder="Fax" name="fax" value="<?php echo $row['fax']; ?>">
</div>
<label class="col-md-3">Toll Free No</label>
<div class="form-group col-md-9">
<input type="text" class="form-control" placeholder="Toll Free No" name="tollfree" value="<?php echo $row['tollfree']; ?>">
</div>
<label class="col-md-3">Whatsapp No</label>
<div class="form-group col-md-9">
<input type="text" class="form-control" placeholder="Whatsapp No" name="whatsapp" value="<?php echo $row['whatsapp']; ?>">
</div>
<label class="col-md-3">Email ID 1</label>
<div class="form-group col-md-9">
<input type="text" class="form-control" placeholder="Email ID" name="email1" value="<?php echo $row['email1']; ?>" required>
</div>
<label class="col-md-3">Email ID 2</label>
<div class="form-group col-md-9">
<input type="text" class="form-control" placeholder="Email ID" name="email2" value="<?php echo $row['email2']; ?>">
</div>
<label class="col-md-3">Email ID 3</label>
<div class="form-group col-md-9">
<input type="text" class="form-control" placeholder="Email ID" name="email3" value="<?php echo $row['email3']; ?>">
</div>
<label class="col-md-3">Facebook link</label>
<div class="form-group col-md-9">
<input type="text" class="form-control" placeholder="Facebook link" name="facebook" value="<?php echo $row['facebook']; ?>">
</div>
<label class="col-md-3">Goople plus link</label>
<div class="form-group col-md-9">
<input type="text" class="form-control" placeholder="Goople plus link" name="google" value="<?php echo $row['googleplus']; ?>">
</div>
<label class="col-md-3">Twitter link</label>
<div class="form-group col-md-9">
<input type="text" class="form-control" placeholder="Twitter link" name="twitter" value="<?php echo $row['twitter']; ?>">
</div>
<label class="col-md-3">Youtube link</label>
<div class="form-group col-md-9">
<input type="text" class="form-control" placeholder="Youtube link" name="youtube" value="<?php echo $row['youtube']; ?>">
</div>
<label class="col-md-3">Blog url</label>
<div class="form-group col-md-9">
<input type="text" class="form-control" placeholder="blog" name="blogurl" value="<?php echo $row['blogurl']; ?>">
</div>
<label class="col-md-3">Address</label>
<div class="form-group col-md-9">
<textarea class="form-control" placeholder="Company Address" rows="4" name="address"><?php if(!empty($row['address'])){ echo $row['address'];}?></textarea>
</div>
</div>
<button type="submit" class="btn btn-success" name="update">Submit Information</button>
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