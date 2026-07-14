<?php 
include "include/db-config.php";
include "include/auth.php";
include "include/siteinfo.php";
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="">
<meta name="keywords" content="">
<title>Admin Dashboard  - <?php echo $sitename;?></title>
<?php include "style.php";?>
</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">
<?php include "header.php";?>
<?php include "menubar.php";?>

<div class="app-content content">
<div class="content-wrapper">
<div class="content-wrapper-before"></div>
<div class="content-header row"></div>
<div class="content-body">
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="card">
<div class="card-content collapse show">
<div class="card-body text-center" style="padding-top:30px;padding-bottom:40px;">
<div class="welcome"><img src="images/welcome.png" alt="" /></div>
<div class="good">
<?php 
date_default_timezone_set('Asia/Calcutta'); 
/*$hour = date('H');
$dayTerm = ($hour > 17) ? "Evening" : ($hour > 12) ? "Afternoon" : "Morning";
echo "<h2 class='font40'>Good " . $dayTerm. "</h2>";*/
?>
<?php
$time = date("H");
$timezone = date("e");
if ($time < "12") {
echo "<h2 class='font40'>Good morning</h2>";
} 
else if ($time >= "12" && $time < "17") {
echo "<h2 class='font40'>Good afternoon</h2>";
} 
else if ($time >= "17" && $time < "20") {
echo "<h2 class='font40'>Good evening</h2>";
} else if ($time >= "20") {
echo "<h2 class='font40'>Good night</h2>";
}
?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
<?php include "footer.php";?>
</body>

</html>