
<?php if(is_array($data)): ?>

	<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Profile</title>
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
        <link href="<?=ASSETS?>css/forms1.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?=ASSETS?>css/J.css" rel="stylesheet">
    </head>

     <!-- Hero Start -->
  
    <body>
        <?php include "menu.php" ?>
                   	


                    	  <?php if(isset($_SESSION['name'])): ?>
                      <h2 style="text-align:center"> <?=$_SESSION['name']?> 's Profile</h2>
                          <?php endif; ?>

     <div class ="center">
    <div class="container" style="height: 750px">
<form action="" method="post" name="profile">

   
Name <br><input type="text" name="Name" placeholder="<?=$data['user']->Name?>"/><hr/>
Email <br>
<input type="text" name="Email" placeholder="<?=$data['user']->Email?>"/><hr/>

Phone <br>
<input type="text" name="Phone" placeholder="<?=$data['user']->Phone?>"/><hr/>

Bio <br>
<input type="text" name="Bio" placeholder="<?=$data['user']->Bio?>"/><hr/>

Password <br>
<input type="text" name="Password" placeholder="<?=$data['user']->Password?>"/><hr/>
<br>
Confirm Password <br>
<input type="text" placeholder="<?=$data['user']->Password?>"/>
<br>

    <div class="text-center">
   <div  style="color:red;"> <?php check_message(); ?>  </div>
    <br><br>
    
<input class='SubmitButton' type="submit" value="Update" name="submitUpdate">
    </div><br><br>
  
</form>
      </div>
      </div>
      <?php
     

?>

          <?php endif; ?>
    </body>
    </html>
        