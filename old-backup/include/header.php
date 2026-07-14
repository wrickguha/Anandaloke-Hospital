<div>
   
<div id="logo2018"></div>
<div id="accredit"></div>
</div>
<!--Header Start-->
<div id="header">
 

<div id="header_icon"><a href="find_doctor.php"><img src="images/doc_icon.jpg" / border="0"></a></div>
<div id="header_icon"><a href="appointment.php"><img src="images/appnt_icon.jpg" / border="0"></a></div>
<div id="header_icon"><a href="careers.php"><img src="images/careers.jpg" / border="0"></a></div>
<div id="header_emergency"><img src="images/emergency_icon.png" / border="0"></div>
<div id="header_gap"></div>
<!--Main Nav Start-->
<div class="chromestyle" id="chromemenu">
<ul>

<?php
        $full_name = $_SERVER['PHP_SELF'];
        $name_array = explode('/',$full_name);
        $count = count($name_array);
        $page_name = $name_array[$count-1];
    ?>
    
<li><a class="<?php echo ($page_name=='index.php')?'active':'';?>" href="index.php">Home</a></li>
<li><a class="<?php echo ($page_name=='who_we_are.php'||$page_name=='vision.php'||$page_name=='management.php'||$page_name=='administration.php')?'active':'';?>" href="#" rel="dropmenu1">About Us</a></li>
<li><a class="<?php echo ($page_name=='services.php')?'active':'';?>" href="services.php">Services</a></li>
<li><a class="<?php echo ($page_name=='neuro.php'||$page_name=='gastro.php')?'active':'';?>" href="#" rel="dropmenu2">Departments</a></li>
<li><a class="<?php echo ($page_name=='doctors_profile.php')?'active':'';?>" href="doctors_profile.php">Doctors Profile</a></li>
<li><a class="<?php echo ($page_name=='clients.php')?'active':'';?>" href="clients.php">Corporate Affairs</a></li>
<li><a class="<?php echo ($page_name=='responsibility.php')?'active':'';?>" href="responsibility.php">Social Responsibility</a></li>
<li><a class="<?php echo ($page_name=='gallery.php')?'active':'';?>" href="gallery.php">Gallery</a></li>
<li><a class="<?php echo ($page_name=='media.php')?'active':'';?>" href="media.php">Media</a></li>
<li><a class="<?php echo ($page_name=='blog.php')?'active':'';?>" href="blog.php">Blog</a></li>
<li><a class="<?php echo ($page_name=='contact.php')?'active':'';?>" href="contact.php" style="background:none;">Contact</a></li>

</ul>

</div>

<!--About drop down menu -->                                                   
<div id="dropmenu1" class="dropmenudiv" style="width:160px;">
<a href="who_we_are.php">Who We Are</a>
<a href="vision.php">Vision &amp; Mission</a>
<a href="management.php">Management</a>
<a href="administration.php">Administration</a></div>

<!--Departments drop down menu -->                                                   
<div id="dropmenu2" class="dropmenudiv">
<a href="neuro.php">Neuro Surgery &amp; Neuro Medicine</a>
<a href="gastro.php">Gastro-enterlogy &amp; Gastro Surgery</a>
<a href="urology.php">Urology</a>
<a href="nephrology.php">Nephrology</a>
<a href="cardiology.php">Cardiology</a>
<a href="plastic_surgery.php">Plastic &amp; Reconstructive Surgery</a>
<a href="dermatology.php">Dermatology (Skin &amp; Cosmetic)</a>
<a href="laparoscopic.php">General &amp; Laparoscopic Surgery</a>
<a href="orthopaedic.php">Orthopaedic</a>
<a href="gynaeocology.php">Gynaeocology &amp; Obstetrics</a>
<a href="ent.php">Otorhinolaryngology (ENT)</a>
<a href="general_medicine.php">Internal Medicine</a>
<a href="paediatrics.php">Paediatrics &amp; Neonatology</a>
<a href="eye.php">Ophthalmology (Eye Care)</a>
<a href="emergency.php">Emergency &amp; Trauma Care</a></div>

<!--About drop down menu -->                                                   
<div id="dropmenu3" class="dropmenudiv" style="width:100px;">
<a href="media.php">Media</a>
<a href="blog.php">Blog</a></div>


<script type="text/javascript">cssdropdown.startchrome("chromemenu")</script>
<!--Main Nav End-->
<div id="banner_line"></div>
</div>
<!--Header End-->