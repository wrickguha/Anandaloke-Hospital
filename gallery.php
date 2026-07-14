<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gallery - Anandaloke Hospital</title>
<meta name="description" content="Anandaloke Hospital is the leading Multi speciality hospital in Siliguri, Darjeeling, West Bengal." />
<meta name="keywords" content="Anandaloke Hospital, Hospital in siliguri, Hospital in Darjeeling, Hospital in Jalpaiguri, Neuro Surgery, Neuro Medicine, Gastro-enterlogy & Gastro Surgery, Urology, Nephrology, Cardiology, Plastic & Reconstructive Surgery, Dermatology (Skin & Cosmetic), General & Laparoscopic Surgery, Orthopaedic, Gynaeocology & Obstetrics, Otorhinolaryngology (ENT), General Medicine (Chest, Diabetology & Rheumatology), Paediatrics & Neonatology, Ophthalmology (Eye Care), Emergency & Trauma Care." />

<?php include "style.php";?>

</head>

<body>
<div id="wrapper" class="homepage-1">

<?php include "header.php"?>

<div class="page-banner wow fadeInUp" data-bg="images/inner/gallery.jpg">
<div class="container">
<div class="page-title font-title">Gallery</div>
<div class="breadcrumb font-title"><a href="/">Home</a><span class="seperate"><i class="fa fa-long-arrow-right"></i></span><span>Gallery</span>
</div>
</div>
</div>

<div id="blog-section" class="wow fadeInDown apt-60 apb-70">
<div class="blog-wrap">
<div class="container">
<div class="row">
<?php
$get_recent  = $con->query("SELECT * FROM `album_name` order by `id` ASC LIMIT 50");
$count=0;
while($album_name = $get_recent->fetch_assoc())
{
$aid=$album_name['id'];
$count++;
?>
<div class="col-md-4 apt-15 apb-15">
<div class="border1solid bordercolorccc p5">
<?php   
$photo=$con->query("SELECT file FROM `photo` WHERE `category`='$aid' ORDER BY id ASC LIMIT 1");
while($thumb=$photo->fetch_assoc())
{	
if(!empty($thumb['file']))
{
?>
<img src="images/gallery/<?php echo $thumb['file']; ?>" alt="Anandaloke Hospital" class="img-responsive"/>
<?php
} 
else 
{
?>                
<img src="images/gallery.jpg" alt="Anandaloke Hospital"/>
<?php }
}
?>
<div class="content text-center apt-10 apb-5"> <a href="view-gallery.php?view=<?php echo $album_name['id'];?>&name=<?php echo $album_name['name'];?>" title="<?php echo $album_name['name'];?>" class="link font16 fw-500"> <?php echo substr($album_name["name"],0,26); ?> <span class="icon fa fa-long-arrow-right pos-icon"></span></a> 
</div>
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