<?php debug_backtrace() || header('location:404.php'); ?>
<div id="footer-widget-section" class="wow fadeInDown">
    <!-- Footer Widget -->
    <div class="footer-widget-wrap">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-6">
                    <div class="ft-widget-title">
                        <h4>Contact</h4>
                    </div>
                    <!-- <img src="images/logo_white.png" alt="Anandaloke Group" style="width: 165px;height: 60px;" /> -->
                    <!-- <br><br> -->
                    <ul id="contact-widget">
                        <li><span><i class="fa fa-map-marker"></i> </span><?php echo $address; ?></li>
                        <li><i class="fa fa-phone"></i> <span>: </span><?php echo $phone2; ?>,<?php echo $phone3; ?></li>
                        <li><span>Emergency : </span>+91 99331 00200</li>
                        <li><span>Enquiry : </span>+91 81166 00200</li>
                        <li><span>OPD No. : </span>98006 00400</li>
                        <li><i class="fa fa-fax"></i> <span>: </span><?php echo $fax; ?></li>
                        <li><i class="fa fa-envelope"></i> <span>: </span><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                    </ul>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="ft-widget-title">
                        <h4>Important Links</h4>
                    </div>
                    <ul id="menu-footer-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="who-we-are">About Us</a></li>
                        <li><a href="vision-and-mission">Vision &amp; Mission</a></li>
                        <li><a href="management">Management</a></li>
                        <li><a href="javascript:void(0);">Administration</a></li>
                        <li><a href="services">Services</a></li>
                        <li><a href="doctors">Doctors</a></li>
                        <li><a href="urology">Urology</a></li>
                        <li><a href="nephrology">Nephrology</a></li>
                        <li><a href="cardiology">Cardiology</a></li>
                        <li><a href="orthopedic">Orthopaedic</a></li>
                        <li><a href="otorhinolartngology">Otorhinolaryngology (ENT)</a></li>
                        <li><a href="javascript:void(0);">Internal Medicine</a></li>
                        <li><a href="paediatrics-and-neonatology">Paediatrics &amp; Neonatology</a></li>
                        <li><a href="ophthalmology">Ophthalmology (Eye Care)</a></li>
                        <li><a href="corporate-affairs">Corporate Affairs</a></li>
                        <li><a href="social-responsibility">Social Responsibility</a></li>
                        <li><a href="gallery">Gallery</a></li>
                        <li><a href="annual-report">Annual Report</a></li>
                        <li><a href="javascript:void(0);">Privacy Policy</a></li>
                        <li><a href="javascript:void(0);">Sitemap</a></li>
                        <li><a href="">Our Blog</a></li>
                        <li><a href="dnb-radiodiagnosis">DNB Radiodiagnosis</a></li>
                        <li><a href="https://www.anandalokeinstitute.com/" target="_blank">Academics Institute</a></li>
                        <li><a href="career">Career</a></li>
                        <li><a href="contact">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="ft-widget-title">
                        <h4>Like us on faceook</h4>
                    </div>
                    <div class="fb-like-box" data-href="https://www.facebook.com/ahnc.slg.7/?fref=nf" data-width="260" data-height="270" data-show-faces="true" data-stream="false" data-header="true"></div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Footer Widget -->

<div class="footer-credits wow fadeInUp">
    <!-- Footer Copy right/credits -->
    <div class="container">
        <div class="credits">&copy; <?php echo date('Y'); ?> Anandaloke Hospital. All rights reserved.</div>
        <div class="ft-soc"><a href="" target="_blank" rel="nofollow"><img src="" alt="" /></a></div>
    </div>
</div>


</div>

<script src="js/jquery1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.js"></script>
<script src="js/waypoints.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/quicksand.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/datepicker.js"></script>
<script src="js/theme-script.js"></script>
<script src="js/jquery.easy-ticker.js"></script>
<script type="text/javascript" src="js/theia-sticky-sidebar.min.js"></script>
<script>
    $(function() {
        $('.demo1').easyTicker({
            direction: 'up',
            easing: 'swing'
        });
    });

    $(function() {
        var url = window.location.href;
        var page = url.substr(url.lastIndexOf('/') + 1);
        $('.nav a[href*="' + page + '"]').addClass('active');
        $('.nav a[href*="' + page + '"]').closest('li').addClass('active').siblings().removeClass('active');;
    });

    $('.page-banner').each(function() {
        "use strict";
        if ($(this).attr("data-bg")) {
            $(this).css({
                'background': 'url(' + $(this).data('bg') + ')',
                'background-position': 'center center',
                'background-repeat': 'no-repeat',
                'background-size': 'cover',
                'background-attachment': 'scroll'
            });
        }
    });

    $('#datepicker').datepicker({
        format: 'mm/dd/yyyy'
    });
    $('#datepicker1').datepicker({
        format: 'mm/dd/yyyy'
    });
</script>
<script>
    $(document).ready(function() {
        $('.sidebar')
            .theiaStickySidebar({
                additionalMarginTop: 30
            });
    });
</script>
<script type="text/javascript">
    function change_department() {
        var department = $("#department").val();
        $.ajax({
            type: "POST",
            url: "doctorData",
            data: {
                department: department
            },
            success: function(response) {
                $("#doctor").html(response);
            }
        });
    }
</script>

<div id="appointment" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Make an Appointment</h5>
                <span><em></em></span>
                <a type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="images/close.png" alt="close" /></a>
            </div>
            <div class="modal-body appointment">
                <form action="check-modal" method="post">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" placeholder="Name" required />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="tel" name="phone" placeholder="Phone No" required />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" name="email" placeholder="Email ID" required />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="number" name="age" min="1" max="100" placeholder="Select Age" required />
                        </div>

                        <div class="col-md-6 form-group">
                            <select name="gender" required>
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <select class="form-control" name="department" required>
                                <option value="">Select Department</option>
                                <?php
                                $sel = $con->query("SELECT * FROM department");
                                while ($fetch = $sel->fetch_assoc()) {
                                ?>
                                    <option value="<?php echo $fetch['id']; ?>"><?php echo $fetch['department']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <select name="doctor" class="form-control">
                                <option value="">Select Doctor</option>
                                <?php
                                $sel = $con->query("SELECT * FROM doctors");
                                while ($fetch = $sel->fetch_assoc()) {
                                ?>
                                    <option value="<?php echo $fetch['doctor_name']; ?>"><?php echo $fetch['doctor_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" id="datepicker" data-provide="datepicker" name="date" placeholder="DD/MM/YYYY" required />
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12 form-group">
                            <textarea name="message" placeholder="Message / Requirement(if any)"></textarea>
                        </div>
                        <div class="col-md-6 form-group">
                            <img src="captcha/appoint-captcha.php" class="ccap" />
                            <input type="text" name="ccaptcha" placeholder="Captcha Here" required />
                        </div>
                        <div class="col-md-6 form-group">
                            <button type="submit" name="submit">GET APPOINTMENT <i class="fa fa-long-arrow-right"></i></button>
                        </div>
                    </div>
                </form>


            </div>
        </div>

    </div>
</div>
        <!-- Modal -->
        <div id="modal" class="modal fade introview" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <a href="javascript:void(0)" class="dblock"> <img src="images/popup-new.jpg" class="max" /></a>
                    <a href="javascript:void(0)" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="&nbsp;" />
                    </a>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            setTimeout(function() {
                $('#modal').modal('show');
            }, 500);
        </script>

<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>