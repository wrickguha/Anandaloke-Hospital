<?php
if(!isset($_GET['view'])){
	header('location:gallery.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $_GET['name'];?> - Anandaloke Hospital</title>
<meta name="description" content="Anandaloke Hospital is the leading Multi speciality hospital in Siliguri, Darjeeling, West Bengal." />
<meta name="keywords" content="Anandaloke Hospital, Hospital in siliguri, Hospital in Darjeeling, Hospital in Jalpaiguri, Neuro Surgery, Neuro Medicine, Gastro-enterlogy & Gastro Surgery, Urology, Nephrology, Cardiology, Plastic & Reconstructive Surgery, Dermatology (Skin & Cosmetic), General & Laparoscopic Surgery, Orthopaedic, Gynaeocology & Obstetrics, Otorhinolaryngology (ENT), General Medicine (Chest, Diabetology & Rheumatology), Paediatrics & Neonatology, Ophthalmology (Eye Care), Emergency & Trauma Care." />

<?php include "style.php";?>

</head>

<body>
<div id="wrapper" class="homepage-1">

<?php include "header.php"?>

<div class="page-banner wow fadeInUp" data-bg="images/inner/gallery.jpg">
<div class="container">
<div class="page-title font-title"><?php echo ucfirst(strtolower($_GET['name']));?></div>
<div class="breadcrumb font-title"><a href="/">Home</a><span class="seperate"><i class="fa fa-long-arrow-right"></i></span><span><?php echo ucfirst(strtolower($_GET['name']));?></span>
</div>
</div>
</div>

<section class="services-title-box apt-30 apb-15">
<div class="container">
<div class="row">
<div class="col-sm-8 col-md-9">
<div class="title-box text-left">
<h3 class="amt-20 amb-0 font22"><?php echo ucfirst($_GET['name']);?></h3>
</div>
</div>
<div class="col-sm-4 col-md-3 amt-10">
<a href="gallery.php" class="back-btn"><i class="fa fa-long-arrow-left"></i> Back to Main Gallery</a>
</div>
</div>
</div>
</section>

<div id="blog-section" class="wow fadeInDown apt-20 apb-70">
<div class="blog-wrap">
<div class="container">
<div class="row">
<?php
$id=$con->real_escape_string($_GET['view']);	
$get_photo=$con->query("SELECT * FROM `photo` WHERE `category`='$id' ORDER BY id ASC");	
$count=0;
while($photo=$get_photo->fetch_assoc())
{
$count++;
?>
<div class="col-md-4 apt-15 apb-15">
<div class="border1solid bordercolorccc p5">
<a href="images/gallery/<?php echo $photo['file']; ?>" data-fancybox="images" title="<?php echo $photo['name']; ?>">
<img src="images/gallery/<?php echo $photo['file']; ?>" alt="<?php echo $photo['name']; ?>" class="img-responsive" />
</a>
</div>
</div>
<?php } ?>
</div>
</div>
</div>
</div>

<?php include "footer.php"?>
</body>

</html>