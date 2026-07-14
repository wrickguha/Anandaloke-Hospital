<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Doctors - Anandaloke Hospital</title>
<meta name="description" content="Anandaloke Hospital is the leading Multi speciality hospital in Siliguri, Darjeeling, West Bengal." />
<meta name="keywords" content="Anandaloke Hospital, Hospital in siliguri, Hospital in Darjeeling, Hospital in Jalpaiguri, Neuro Surgery, Neuro Medicine, Gastro-enterlogy & Gastro Surgery, Urology, Nephrology, Cardiology, Plastic & Reconstructive Surgery, Dermatology (Skin & Cosmetic), General & Laparoscopic Surgery, Orthopaedic, Gynaeocology & Obstetrics, Otorhinolaryngology (ENT), General Medicine (Chest, Diabetology & Rheumatology), Paediatrics & Neonatology, Ophthalmology (Eye Care), Emergency & Trauma Care." />

<?php include "style.php";?>

</head>

<body>
<div id="wrapper" class="homepage-1">

<?php include "header.php"?>

<div class="page-banner wow fadeInUp" data-bg="images/inner/doctors.jpg">
<div class="container">
<div class="page-title font-title">Doctors</div>
<div class="breadcrumb font-title"><a href="/">Home</a><span class="seperate"><i class="fa fa-long-arrow-right"></i></span><span>Doctors</span>
</div>
</div>
</div>

<div id="blog-section" class="wow fadeInDown apt-60 apb-70">
<div class="blog-wrap">
<div class="container">
<div class="row">
<div class="col-md-9 blog-content">
<div class="simple-blog-ct">
<h3 class="font-title apb-15">Doctors</h3>

<?php 
/*$sql="SELECT doctors.*,department.department AS department_name
FROM doctors
INNER JOIN department ON department.id=doctors.department_id
ORDER BY id ASC";
$mysqli=$con->query($sql);
while($row=$mysqli->fetch_assoc()){
extract($row);*/
?>
<?php
$get_recent  = $con->query("SELECT * FROM `department` WHERE `status`='0' ORDER BY `id` ASC LIMIT 100");
while($row = $get_recent->fetch_assoc())
{
$did=$row['id'];
$department_name=$row['department'];
?>
<table class="table table-bordered table-striped">
<tr class="info">
<th colspan="3" class="font16 fw-500"><?php echo $department_name;?></th>
</tr>
<tr>
<th>Doctor's Name</th>
<th>OPD Timing</th>
<th>Location</th>
</tr>
<?php	
$sql=$con->query("SELECT * FROM `doctors` WHERE `department_id`='$did' ORDER BY `id` ASC LIMIT 60");
while($depart=$sql->fetch_assoc())
//extract($depart);
{
?>
<tr>
<td><?php echo $depart['doctor_name'];?></td>
<td><?php echo $depart['opd_time'];?></td>
<td><?php echo $depart['location'];?></td>
</tr>
<?php }
?>
</table>
<?php } ?>
</div>
</div>

<?php include "sidebar.php";?>

</div>
</div>
</div>
</div>

<?php include "footer.php"?>
</body>

</html>