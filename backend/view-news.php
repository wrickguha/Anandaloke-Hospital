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
<title>View News</title>
<?php include "style.php";?>
 <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">
<?php
 	if(isset($_GET['del'])){
		$id=sanitize($con,$_GET['id']);
		$delete	=	$con->query("DELETE FROM `latest_news` WHERE `id`='$id'");		
		if($delete){
			echo "<script>alert('Latest News Deleted!');location.replace('view-news.php?success');</script>";
		}
	}
 ?>
<script type="text/javascript">
	function delnews(id,file){
		if(confirm("Are you sure?")){
			location.replace('view-news.php?del&id='+id);
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
<h3 class="content-header-title">View News</h3>
</div>
<div class="content-header-right col-md-8 col-12">
<div class="breadcrumbs-top float-md-right">
<div class="breadcrumb-wrapper mr-1">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active">View News</li>
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
<h4 class="card-title">View Latest News</h4>
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
<th>News Title</th>
<th>Url</th>
<th>PDF File</th>
<th>Edit</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php 
$sql=$con->query("SELECT * FROM latest_news") or die("MYSQL ERROR!");
while($news=$sql->fetch_assoc())
{
?>
<tr>
<td><input type="checkbox" name="set" onclick="setChecked(this)" /></td>
<td><?php echo $news['news_title']; ?></td>
<td><?php echo $news['news_url']; ?></td>
<?php if(!empty($news['file'])) { ?>
<td><?php  echo" <iframe src='../pdf/".$news['file']."'></iframe>";?></td>
<?php } else { ?>
<td>&nbsp;</td>
<?php } ?>
<td class="center"> <a href="edit-news.php?edit&eid=<?php echo $news['id'];?>"><img src="images/edit.png" alt="" width="20"/></a></td>
<td><a onclick="del(<?php echo $news['id']; ?>')"><img src="images/delete.png" alt="" width="20"/></a></td>
</tr>
<?php }?>
</tbody>
<tfoot>
<tr>
<th>ID</th>
<th>News Title</th>
<th>Url</th>
<th>PDF File</th>
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