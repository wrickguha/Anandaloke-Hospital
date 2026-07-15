<?php
debug_backtrace() || header('location:404.php');
include('backend/include/db-config.php');
include('backend/include/siteinfo.php');
?>
<div id="header" class="wow fadeInDown">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo-wrap">
                    <a href="/" class="logo">
                        <img src="images/main-logo.png" alt="logo" class="img-responsive">
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="info-nav-wrap">
                    <div class="info-section">
                        <div class="right">
                            <div style="float: left; padding: 11px 15px; border-right: 1px solid #e3e7ec;">
                                <a href="dnb-radiodiagnosis.php" class="btn btn-danger btn-dnb-header" style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #fff; background: #eb222e; padding: 6px 12px; border-radius: 4px; border: none; box-shadow: 0 4px 10px rgba(235, 34, 46, 0.3); transition: all 0.3s ease; display: inline-block; line-height: normal; animation: navbarPulse 2s infinite; text-shadow: none;">DNB Radiodiagnosis</a>
                            </div>
                            <div class="help">
                                <a href="mailto:<?php echo $email; ?>">
                                    <i class="fa fa-commenting-o"></i>
                                    <div class="left">
                                        <span>Mail </span><?php echo $email; ?>
                                    </div>
                                </a>
                            </div>
                            <div class="call">
                                <a href="tel:+918116600200">
                                    <i class="fa fa-mobile"></i>
                                    <div class="left">
                                        <span>Call us</span><?php echo $phone; ?>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                            <div class="top-booking">
                                <a data-toggle="modal" data-target="#appointment" class="btn btn-default btn-booking">Make an appoinment</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="main-nav-wrap">

                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="/">Home</a></li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="who-we-are.php">Who we are</a></li>
                                            <li><a href="mission-vision.php">Mission &amp; Vision</a></li>
                                            <li><a href="management.php">Management</a></li>
                                            <li><a href="javascript:void(0);">Administration</a></li>
                                            <li><a href="annual-report.php">Annual Report</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="services.php">Services</a></li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Departments </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="neuro.php">Neuro Surgery &amp; Neuro Medicine</a></li>
                                            <li><a href="gastro-enterlogy-and-gastro-surgery.php">Gastro-enterlogy &amp; Gastro Surgery</a></li>
                                            <li><a href="urology.php">Urology</a></li>
                                            <li><a href="nephrology.php">Nephrology</a></li>
                                            <li><a href="cardiology.php">Cardiology</a></li>
                                            <li><a href="plastic-and-reconstructive-surgery.php">Plastic &amp; Reconstructive Surgery</a></li>
                                            <li><a href="javascript:void(0);">Dermatology (Skin &amp; Cosmetic)</a></li>
                                            <li><a href="general-and-laparoscopic-surgery.php">General &amp; Laparoscopic Surgery</a></li>
                                            <li><a href="orthopaedic.php">Orthopaedic</a></li>
                                            <li><a href="gynaeocology-and-obstetrics.php">Gynaeocology &amp; Obstetrics</a></li>
                                            <li><a href="otorhinolartngology.php">Otorhinolaryngology (ENT)</a></li>
                                            <li><a href="javascript:void(0);">Internal Medicine</a></li>
                                            <li><a href="paediatrics-and-neonatology.php">Paediatrics &amp; Neonatology</a></li>
                                            <li><a href="ophthalmology.php">Ophthalmology (Eye Care)</a></li>
                                            <li><a href="emergengy-and-trauma-care.php">Emergency &amp; Trauma Care</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="doctors.php">Doctors</a></li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Academics </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="dnb-radiodiagnosis.php">DNB Radiodiagnosis</a></li>
                                            <li><a href="https://www.anandalokeinstitute.com/" target="_blank">Academics Institute</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="corporate-affairs.php">Corporate</a></li>
                                    <li><a href="social-responsibility.php">CSR</a></li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Media </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="gallery.php">Gallery</a></li>
                                            <li><a href="media.php">Media</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>