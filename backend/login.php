<?php 
session_start();
ob_start();
require('include/db-config.php');
include"include/function.php";	
include"include/siteinfo.php";	
if (isset($_POST['username'])){	
	$username = sanitize($con, $_REQUEST['username']); 
	$password = sanitize($con, $_REQUEST['password']);
	$password = md5($password);
	$query = "SELECT * FROM `users` WHERE username='".$username."' AND password='".$password."'";
	$result = $con->query($query) or die($con->error());
	$count = $result->num_rows;
	if($count==1){
		$_SESSION['username'] = $username;
		$msg = "<div class='success text-center'>Login Successful. Please wait <img src='images/loader.gif' alt='' width='70' /></div>"; 
		$url = "index.php";
		header( "refresh:2; '".$url."'" );  
	}
	else
	{
		$msg="<div class='error text-center'>username / password is incorrect.</div>";
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
<title>Admin Login </title>
<link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="app-assets/css/vendors.min.css">
<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/toggle/switchery.min.css">
<link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/switch.min.css">
<link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-switch.min.css">
<link rel="stylesheet" type="text/css" href="app-assets/css/app.min.css">
<link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
<link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">
<link rel="stylesheet" type="text/css" href="app-assets/css/pages/login-register.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<style>.error{color:red}</style>
</head>

<body class="vertical-layout vertical-menu 1-column bg-full-screen-image menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="1-column">
<div class="app-content content">
<div class="content-wrapper">
<div class="content-wrapper-before"></div>
<div class="content-header row"></div>
<div class="content-body">
<section class="flexbox-container">
<div class="col-12 d-flex align-items-center justify-content-center">
<div class="col-md-4 col-10 box-shadow-2 p-0">
<div class="card border-grey border-lighten-3 px-1 py-1 m-0">
<div class="card-header border-0">
<div class="text-center mb-1">
<img src="../images/logo.png" alt="<?php echo $sitename;?>" />
</div><?php if(!isset($msg)){?>
<div class="font-large-1 text-center">Admin Login</div>
<?php } else { echo $msg; }?>

</div>
<div class="card-content">
<div class="card-body">
<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<fieldset class="form-group position-relative has-icon-left">
<input type="text" class="form-control round" id="user-name" name="username" placeholder="Username" required>
<div class="form-control-position"> <i class="ft-user"></i>
</div>
</fieldset>
<fieldset class="form-group position-relative has-icon-left">
<input type="password" class="form-control round" id="user-password" name="password" placeholder="Password" required>
<div class="form-control-position"> <i class="ft-lock"></i>
</div>
</fieldset>

<div class="form-group text-center">
<button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1" name="submit">Login</button>
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
<script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
<script src="app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
<script src="app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
<script src="app-assets/js/core/app.min.js" type="text/javascript"></script>
<script src="app-assets/js/scripts/forms/form-login-register.min.js" type="text/javascript"></script>
</body>

</html>