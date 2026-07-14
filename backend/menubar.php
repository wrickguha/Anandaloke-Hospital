<?php debug_backtrace() || header('location:404.php');?>
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true" data-img="app-assets/images/backgrounds/02.jpg">
<div class="navbar-header">
<ul class="nav navbar-nav flex-row">
<li class="nav-item mr-auto">
<a class="navbar-brand" href="index.html">
<img class="brand-logo" alt="admin logo" src="../images/logo.png" />
</a>
</li>
<li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a>
</li>
</ul>
</div>
<div class="main-menu-content">
<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
<li class=" nav-item"><a href="index.php"><i class="ft-home"></i><span class="menu-title">Dashboard</span></a></li>
<li class=" nav-item"><a href="site-information.php"><i class="ft-aperture"></i><span class="menu-title">Site Information</span></a></li>
<li class=" nav-item"><a href="#"><i class="ft-home"></i><span class="menu-title">Department</span></a>
<ul class="menu-content">
<li><a class="menu-item" href="add-department.php">Add Department</a></li>
<li><a class="menu-item" href="view-department.php">View Department</a></li>
</ul>
</li>
<li class=" nav-item"><a href="#"><i class="ft-home"></i><span class="menu-title">Manage Doctors</span></a>
<ul class="menu-content">
<li><a class="menu-item" href="add-doctor.php">Add Doctor Details</a></li>
<li><a class="menu-item" href="view-doctor.php">View Doctor Details</a></li>
</li>
</ul>
</li>
<li class=" nav-item"><a href="#"><i class="ft-image"></i><span class="menu-title">Manage Album</span></a>
<ul class="menu-content">
<li><a class="menu-item" href="add-album.php">Add Album</a></li>
<li><a class="menu-item" href="view-album.php">View Album List</a></li>
</ul>
</li>
<li class=" nav-item"><a href="#"><i class="ft-image"></i><span class="menu-title">Manage Gallery</span></a>
<ul class="menu-content">
<li><a class="menu-item" href="add-gallery.php">Add Gallery</a></li>
<li><a class="menu-item" href="view-photo.php">View Gallery</a></li>
</ul>
</li>

<li class=" nav-item"><a href="#"><i class="ft-image"></i><span class="menu-title">Manage News</span></a>
<ul class="menu-content">
<li><a class="menu-item" href="add-news.php">Add News</a></li>
<li><a class="menu-item" href="view-news.php">View News</a></li>
</ul>
</li>

<li class=" nav-item"><a href="#"><i class="ft-file"></i><span class="menu-title">Enquiry</span></a>
<ul class="menu-content">
<!-- <li><a class="menu-item" href="generalenquiry-list.php">General Enquiry</a></li> -->
<li><a class="menu-item" href="appointment-list.php">Appointment Enquiry</a></li>
</ul>
</li>

</ul>
</div>
<div class="navigation-background"></div>
</div>