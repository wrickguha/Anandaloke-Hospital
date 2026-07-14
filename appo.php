<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Mediplus Responsive Medical Theme</title>
<?php include'style.php';?>
    </head>
    <body>
        <div id="wrapper" class="homepage-1"> <!-- Wrapper -->
            
            <?php include'header.php';?><!-- Header -->
            
            <div class="page-banner wow fadeInUp"><!-- Page banner -->
                <div class="container">
                    <div class="page-title font-title">Appointment</div>
                    <div class="breadcrumb font-title"><a href="">Home</a><span class="seperate">/</span><span>Appointment</span></div>
                </div>
            </div><!-- Page banner -->
            
            <div id="appointment-wrap" class="wow fadeInDown">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="font-title">Our History</h3>
                            
                            <form class="appointment-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="firstname" placeholder="First name*">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="lastname" placeholder="Last name*">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="Email*">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phone" placeholder="Phone number*">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" >
                                        <option>Services*</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div id="sandbox-container">
                                        <div class="input-daterange" id="datepicker">
                                            <input class="input-sm form-control" name="start" type="text" placeholder="Appoinment Date*">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" placeholder="comment*"></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="text-center">
                                <img src="images/app-1.jpg" alt="app-1" class="img-responsive"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            
            <div id="counter-section" class="wow fadeInDown"><!-- Counter -->
                <div class="counter-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="icon-wrap">
                                    <i class="fa fa-building-o"></i>
                                </div>
                                <div class="value-counter">
                                    <div class="counter">600</div><span>Hospital rooms</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-3">
                                <div class="icon-wrap">
                                    <i class="fa fa-user-md"></i>
                                </div>
                                <div class="value-counter">
                                    <div class="counter">200</div><span>Professionals</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-3">
                                <div class="icon-wrap">
                                    <i class="fa fa-trophy"></i>
                                </div>
                                <div class="value-counter">
                                    <div class="counter">18</div><span>Hospital Awards</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-3">
                                <div class="icon-wrap">
                                    <i class="fa fa-smile-o"></i>
                                </div>
                                <div class="value-counter">
                                    <div class="counter">300</div><span>Happy Patients</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div><!-- Counter -->
            
<?php include'footer.php';?>      
</body>
</html>