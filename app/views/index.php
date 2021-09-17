
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Jardin</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="<?=ASSETS?>img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" >
        <link rel="stylesheet" href="<?=ASSETS?>lib/animate/animate.min.css" >
        <link rel="stylesheet" href="<?=ASSETS?>lib/flaticon/font/flaticon.css" > 
        <link rel="stylesheet" href="<?=ASSETS?>lib/owlcarousel/assets/owl.carousel.min.css" >
        <link rel="stylesheet" href="<?=ASSETS?>lib/lightbox/css/lightbox.min.css" >

        <!-- Template Stylesheet -->
        <link href="<?=ASSETS?>css/style2.css" rel="stylesheet">
    </head>
    <?php $this->view("menu",$data); ?>
    <body>
 
        <!-- Hero Start -->
        <div class="hero">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-text">


                        <?php if(isset($_SESSION['name'])): ?>

                            <h2 style="color:gray;"> Hi, <?=$_SESSION['name']?>!</h2>
                         <?php endif; ?>

                         
                            <h1>Where the journey begins</h1>
                            <p>
                                Jardin is an open-air co-working space, that offers its clients a haven to work and enjoy a day out.
                            </p>
                            <div class="hero-btn">
                                <a class="btn" href="">Join Now</a>
                                <a class="btn" href="">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                        <div class="hero-image">
                            <img src="<?=ASSETS?>img/ppl2.png"   style="opacity: 0.8; border-radius:40%;" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Start -->
        <div class="about wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="<?=ASSETS?>img/header1.jpg" alt="Image" >
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            <p>About Us</p>
                            <h2>Welcome to Jardin</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Jardin is an open air coworking space. We're going to create a web app for booking spots at different hours of the day prior to the clients visit. The app will be used also to facilitate communication between clients and admins.
                            </p>

                            <a class="btn" href="about.php">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        
        
        <!-- Discount Start -->
        <div class="discount wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <p></p>
                    <h2>Journeys </h2>
                </div>
                <div class="container discount-text">
                    <p>
                        Journeys allows you to view the ongoing ativities that is taking place in Jardin throughout the whole week and it's timings! 
                    </p>
                    <a href="journeysnew.php" class="btn">Join Now</a>
                </div>
            </div>
        </div>
        <!-- Discount End -->
        
        
    
        
        <!-- Testimonial Start -->
        <div class="testimonial wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <p>Testimonial</p>
                    <h2>Our Client Say!</h2>
                    <p><a href="<?=ROOT?>reviews">Write Review</a> </p>

                </div>

                <div class="owl-carousel testimonials-carousel">
                <?php foreach($data['reviews'] as $row):?>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="<?=ASSETS?>img/testimonial-1.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                <?php echo $row->Review; ?>
                            </p>
                            <h3><?php echo $row->Rating; ?></h3>
                            
                        </div>
                    </div>
                    <?php endforeach; ?>
                    
                   
                    
                    
                </div>
            </div>
        </div>
        <!-- Testimonial End -->





        <!-- Footer Start -->
        <?php $this->view("footer",$data); ?>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?=ASSETS?>lib/easing/easing.min.js"></script>
        <script src="<?=ASSETS?>lib/wow/wow.min.js"></script>
        <script src="<?=ASSETS?>lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="<?=ASSETS?>lib/isotope/isotope.pkgd.min.js"></script>
        <script src="<?=ASSETS?>lib/lightbox/js/lightbox.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src=">mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="<?=ASSETS?>js/main.js"></script>
    </body>
</html>
