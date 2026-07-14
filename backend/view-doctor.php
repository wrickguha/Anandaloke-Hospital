<?php
include("include/auth.php");
include('include/db-config.php');
include('include/function.php');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<title>View Doctor List</title>
<?php include "style.php";?>
 <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">
<?php
 	if(isset($_GET['del'])){
		$id=sanitize($con,$_GET['id']);
		$delete	=	$con->query("DELETE FROM `doctors` WHERE `id`='$id'");		
		if($delete){
			echo "<script>alert('Doctor Details Deleted!');location.replace('view-doctor.php?success');</script>";
		}
	}
 ?>
<script type="text/javascript">
	function del(id){
		if(confirm("Are you sure?")){
			location.replace('view-doctor.php?del&id='+id);
		}
	}
</script>
<?php include "header.php";?>
<?php include "menubar.php";?>

<div class="app-content content">
<div class="content-wrapper">
<div class="content-wrapper-before"></div>
<div class="content-header row">
<div class="content-header-left col-md-4 col-12 mb-2">
<h3 class="content-header-title">View Doctor List</h3>
</div>
<div class="content-header-right col-md-8 col-12">
<div class="breadcrumbs-top float-md-right">
<div class="breadcrumb-wrapper mr-1">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active">View Doctor List</li>
</ol>
</div>
</div>
</div>
</div>

<div class="content-body">
<section id="configuration">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">View Doctor</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
<div class="heading-elements">
<ul class="list-inline mb-0">
<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
<li><a data-action="close"><i class="ft-x"></i></a></li>
</ul>
</div>
</div>
<div class="card-content collapse show">
<div class="card-body card-dashboard">
<table class="table table-striped table-bordered zero-configuration">
<thead>
<tr>
<th>ID</th>
<th>Department</th>
<th>Doctor</th>
<th>OPD Time</th>
<th>Location</th>
<th>Edit</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php 
$get_doctor_list=$con->query("SELECT * FROM doctors") or die("MYSQL ERROR!");
while($doctors=$get_doctor_list->fetch_assoc())
{
$ctname=$doctors['department_id'];
$get_ctname=$con->query("SELECT * FROM department WHERE `id`=$ctname LIMIT 1") or die("MYSQL ERROR!");
$get_ctname_or=$get_ctname->fetch_assoc();
?>
<tr>
<td><input type="checkbox" name="set" onclick="setChecked(this)" /></td>
<td><?php echo $get_ctname_or['department'];?></td>
<td><?php echo $doctors['doctor_name']; ?></td>
<td><?php echo $doctors['opd_time']; ?></td>
<td><?php echo $doctors['location']; ?></td>
<td class="center"> <a href="edit-doctor.php?edit&eid=<?php echo $doctors['id'];?>"><img src="images/edit.png" alt="" width="20"/></a></td>
<td><a onclick="del(<?php echo $doctors['id']; ?>)"><img src="images/delete.png" alt="" width="20"/></a></td>
</tr>
<?php }?>
</tbody>
<tfoot>
<tr>
<th>ID</th>
<th>Department</th>
<th>Doctor</th>
<th>OPD Time</th>
<th>Location</th>
<th>Edit</th>
<th>Action</th>
</tr>
</tfoot>
</table>
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
<script src="app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
<script src="app-assets/js/scripts/tables/datatables/datatable-basic.min.js" type="text/javascript"></script>
</body>
</html>