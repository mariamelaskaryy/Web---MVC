<?php if(!empty($data['journeys'])): ?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Journeys</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="<?=ASSETS?>img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?=ASSETS?>lib/animate/animate.min.css" rel="stylesheet">
        <link href="<?=ASSETS?>lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="<?=ASSETS?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="<?=ASSETS?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?=ASSETS?>css/J.css" rel="stylesheet">
    </head>

    <body>
    <?php
    $this->view("menu");
?>

        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Journeys</h2>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        



        <!-- Class Start -->
        <div class="class">
            <div class="container">
                <div class="row class-container">
                    <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="class-wrap">
                            <div class="class-img">
                                <img src="<?=ROOT."images/".$data['journeys']->Image?>" alt="Image">
                            </div>
                            <div class="class-text">
                                <h2><?=$data['journeys']->Name?></h2>
                                    <div class="class-meta">
                                    <p><i class="far fa-calendar-alt"></i><?=$data['journeys']->Date?></p>
                                    <p><i class="far fa-clock"></i><?=$data['journeys']->Time?></p>
                                    <input type="hidden" name="ID" value="<?php echo $_GET['id'];?>"><br>
                                    

                                    
                                </div>
                            </div>
                        </div> 
                        
                    </div>
                    
                   
                    </div><p style="position: absolute;left: 650px; top:120px; max-width: 350px;"> <?=$data['journeys']->Description?>
                 <br><br>
                   Journey Points: <?=$data['journeys']->JourneyPoints?> 
                    
                 <br><br>
                 Particpants: <br>
                    <?php foreach($data['particpants'] as $row): ?>
                    + <?= $row->Name?> - <?= $row->Email?>  
                    <br>
                   <?php endforeach; ?> </p> 


                   <a href="<?=ROOT.'editJourney/' .$data['journeys']->ID; ?>"  style="position: absolute;left: 1100px; top:160px;"> Edit</a>
                    <br> <br>

                </div>
            </div>
        </div>
        <!-- Class End -->
     
<?php //endforeach; 
 endif; ?> 
        



        <!-- Footer Start -->
        <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container-fluid">
                <div class="container">
                    <div class="footer-info">
                        <h3>Obour, Cairo, Egypt</h3>
                        <div class="footer-menu">
                            <p>+012 345 67890</p>
                            <p>Jardin@gmail.com</p>
                        </div>
                        <div class="footer-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    
                </div>
            </div>
        </div>
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
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="<?=ASSETS?>js/main.js"></script>
    </body>
</html>
