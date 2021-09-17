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
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?=ASSETS?>lib/animate/animate.min.css" rel="stylesheet">
        <link href="<?=ASSETS?>lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="<?=ASSETS?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="<?=ASSETS?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?=ASSETS?>css/style2.css" rel="stylesheet">
        
        <!-- Flip Code -->
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
                
$(document).ready(function(){
  $("#flip1").click(function(){
    $("#panel1").slideToggle("slow");
  });
});
                
$(document).ready(function(){
  $("#flip2").click(function(){
    $("#panel2").slideToggle("slow");
  });
});

$(document).ready(function(){
  $("#flip3").click(function(){
    $("#panel3").slideToggle("slow");
  });
});

</script>
        
  <style>           
#panel, #flip {
  padding: 2px;
  text-align: left;
  background-color: white;
}

#panel1, #flip1 {
  padding: 2px;
  text-align: left;
  background-color: white;
}
      
#panel2, #flip2 {
  padding: 2px;
  text-align: left;
  background-color: white;
}

#panel3, #flip3 {
  padding: 2px;
  text-align: left;
  background-color: white;
}

#flip 
      {
          font-weight: bold;
      }
      
#flip1 
      {
          font-weight: bold;
      }
      
#flip2 
      {
          font-weight: bold;
      }
 #flip3 
      {
          font-weight: bold;
      }
      

#panel {
  padding: 50px;
  display: none;
}
      
#panel1 {
  padding: 50px;
  display: none;
}
      
#panel2 {
  padding: 50px;
  display: none;
}
#panel3 {
  padding: 50px;
  display: none;
}
    
      
        </style>    
    </head>

    <body>
        
<?php include('menu.php')?>

        
<!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>FAQ</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                        <a href="">FAQ</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- About Start -->
        <div class="about wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            <p>Frequently Asked Questions</p>
                            <h2>Welcome to Jardin</h2>
                        </div>
                        <div class="about-text">
                            <div id="flip">What is Jardin?</div>
                            <div id="panel">Jardin is an outdoor coworking space that allows users to make reservations online rather than facing the hassle of phone calls. Jardin makes it's users feel like they are a part of a community, which gives them a sense of peacefulness. Jardin also aims to achieve making every event and activity like a journey to the user</div>
                            
                            <div id="flip1">How is the "Journeys" tab used?</div>
                            <div id="panel1">Journeys tab exists to only display Jardin's events throughtout the whole week</div>
                            
                            <div id="flip2">How are bookings made?</div>
                            <div id="panel2">Bookings are made from the "Journeys" tab, simply click on the "Select Journey" button and fill in the needed information</div>
                            
                                 
                            <div id="flip3">What are those points?</div>
                            <div id="panel3">The more you come to our place, the more points you get. It is that simple. You can later use those points to attend events and get vouchers.</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- About End -->



         <!-- Footer Start -->
        <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container-fluid">
                <div class="container">
                    <div class="footer-info">
                        <h3>123 Street, Cairo, Egypt</h3>
                        <div class="footer-menu">
                            <p>+012 345 67890</p>
                            <p>info@example.com</p>
                        </div>
                        <div class="footer-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#">Jardin</a>, All Right Reserved.</p>
                        </div>

                    </div>
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
