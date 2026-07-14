<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us | Anandaloke Hospital</title>
    <meta name="description" content="Anandaloke Hospital is the leading Multi speciality hospital in Siliguri, Darjeeling, West Bengal." />
    <meta name="keywords" content="Anandaloke Hospital, Hospital in siliguri, Hospital in Darjeeling, Hospital in Jalpaiguri, Neuro Surgery, Neuro Medicine, Gastro-enterlogy & Gastro Surgery, Urology, Nephrology, Cardiology, Plastic & Reconstructive Surgery, Dermatology (Skin & Cosmetic), General & Laparoscopic Surgery, Orthopaedic, Gynaeocology & Obstetrics, Otorhinolaryngology (ENT), General Medicine (Chest, Diabetology & Rheumatology), Paediatrics & Neonatology, Ophthalmology (Eye Care), Emergency & Trauma Care." />

    <?php include 'style.php'; ?>
</head>

<body>

    <div id="wrapper" class="homepage-1">
        <!-- Wrapper -->
        <?php include 'header.php'; ?>
        <!-- Header -->

        <div class="page-banner wow fadeInUp" data-bg="images/inner/contact.jpg">
            <div class="container">
                <div class="page-title font-title">Contact Us</div>
                <div class="breadcrumb font-title"><a href="/">Home</a><span class="seperate">/</span><span>conatct us</span></div>
            </div>
        </div><!-- Page banner -->

        <div id="contact-section" class="wow fadeInDown">
            <div class="container">

                <div class="contact-detail">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="cont-frm">
                                <h3 class="font-title">Get in Touch</h3>
                                <form action="check-contact" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name" placeholder="Name" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Email" class="form-control" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="phone" placeholder="Phone" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="subject" placeholder="Subject" class="form-control" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea name="message" rows="4" placeholder="Message" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <img class="ccap" src="captcha/contact-captcha.php" />
                                                <input type="text" name="ccaptcha" placeholder="Captcha Here" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" name="submit" class="btn btn-primary">Submit <i class="fa fa-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h3 class="font-title">Contact Details</h3>
                            <ul class="contact-detail-ct">
                                <li>
                                    <span>Address : </span><?php echo $address; ?>
                                </li>
                                <li><span>Emergency : </span><?php echo $phone; ?></li>
                                <li><span>Enquiry : </span>+91 81166 00200</li>
                                <li><span>Opd : </span>+91 98006 00400</li>
                                <li><span>Phone : </span><?php echo $phone2; ?> / <?php echo $phone3; ?></li>
                                <li><span>Fax : </span><?php echo $fax; ?></li>
                                <li><span>Email : </span><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <section class="locationmap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20158.3685719165!2d88.4246202089825!3d26.727465131848284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e441051ececb93%3A0xfa2ddb95e7c2dd9c!2sAnandaloke+Hospital+%26+Neurosciences+Centre!5e0!3m2!1sen!2sin!4v1545655495015" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>


        <?php include 'footer.php'; ?>

</body>

</html>