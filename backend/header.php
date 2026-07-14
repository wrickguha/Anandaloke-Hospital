<?php debug_backtrace() || header('location:404.php'); include "include/siteinfo.php";?>
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
<div class="navbar-wrapper">
<div class="navbar-container content">
<div class="collapse navbar-collapse show" id="navbar-mobile">
<ul class="nav navbar-nav mr-auto float-left">
<li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a>
</li>
<li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a>
</li>
<li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a>
</li>
</ul>
<ul class="nav navbar-nav float-right">
<li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell bell-shake" id="notification-navbar-link"></i><span class="badge badge-pill badge-sm badge-danger badge-default badge-up badge-glow">5</span></a></li>
<li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"> </i></a></li>
<li class="dropdown dropdown-user nav-item">
<a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"> <span class="avatar avatar-online"><img src="images/user.png" alt="avatar"></span>
</a>
<div class="dropdown-menu dropdown-menu-right">
<div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="images/user1.png" alt="avatar"><span class="user-name text-bold-700 ml-1"><?php if(!empty($_SESSION['username'])){ echo $_SESSION['username'];}?></span></span></a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="password.php"><i class="ft-lock"></i> Change Password</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="logout.php"><i class="ft-power"></i> Logout</a>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</nav>