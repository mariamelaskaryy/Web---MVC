<link href="<?=ASSETS?>css/forms1.css" rel="stylesheet">

<?php include ('menu.php'); ?>


  <body>
   <div class ="center">
    <div class="container">
<form action="" method="post" name="login">
    <h1>Login </h1>
    <br><br>
Email <br>
<input type="text" name="email" required="" >
<br><br>
Password <br>
<input type="password" name="password" required="" />
<br><br>
    <div class="text-center">
   <div  style="color:red;"> <?php check_message(); ?>  </div>
    <br>
<input class='SubmitButton' type="submit" value="Login" name="Submit">
    </div><br><br>
   <div class="RegisterArea"> Already have an account? <a href="<?=ROOT?>register">Register</a> </div>
</form>
      </div>
      </div>
      </body>



