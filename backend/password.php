<?php 
include("include/auth.php");
include('include/db-config.php');
include('include/function.php');
?>
<?php 
 if(isset($_POST['change_password']))
    {
    $username =$_SESSION['username'];
    $password=sanitize($con,$_POST['new_password']);
    $password1=sanitize($con,$_POST['new_password1']);   
    if($password!= $password1){       
         echo "<script>alert('Entered Password Does Not Match !')</script>";  
    }
    else
    {
        $md5password = md5($password);
        $insert_query="UPDATE `users` SET `password`='".$md5password."', `temp_pass`='".$password."' WHERE `username` = '".$username."'"; 
        if($con->query($insert_query))
        {
        
        echo "<script>alert('Successfully Changed Password');location.replace('password.php');</script>";   
         unset($_SESSION['username']);      
        }
    else
        {
        echo "<script>alert('Couldnt Update Your New Password');</script>"; 
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
<title>Change Password</title>
<?php include "style.php";?>
<style>.error{color:red;}.ml20{margin-left: 20px;}.success{color: #0050aa !important;font-size: 16px;font-weight:600;}
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
<h3 class="content-header-title">Change Password</h3>
</div>
<div class="content-header-right col-md-8 col-12">
<div class="breadcrumbs-top float-md-right">
<div class="breadcrumb-wrapper mr-1">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item"><a href="#">Change Password</a></li>
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
<h4 class="card-title">Change Password</h4>
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
$stmt="SELECT * FROM site_information";
$query=$con->query($stmt);
$row=$query->fetch_assoc();
?>
<form action="" method="post" style="width:50%;border:1px solid #ddd;padding:20px;margin-left:25%">
<div class="form-row">
<label class="col-md-3">New Password</label>
<div class="form-group col-md-9">
<input class="form-control" name="new_password" type="text" required>
</div>
<label class="col-md-3">Re-enter Password</label>
<div class="form-group col-md-9">
<input class="form-control" name="new_password1" type="text" required>
</div>
</div>
<button type="submit" class="btn btn-success" name="change_password">Submit Information</button>
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