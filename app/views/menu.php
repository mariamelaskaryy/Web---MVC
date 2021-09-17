
<link href="<?=ASSETS?>css/menu.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet'>
   
<nav>
    
<a href="<?=ROOT?>index" class="logo"> <div> <img src="<?=ASSETS?>img/logo.png" alt="Jardin" width="130" height="60"></div></a>

<ul>
<li><a href="<?=ROOT?>about">About</a></li>
<li><a href="<?=ROOT?>viewJourneys">Events</a></li>
<li><a href="<?=ROOT?>calender">Book a Spot!</a></li>


<?php 
if(isset($_SESSION['role'])): ?>
<?php if($_SESSION['role']=="Admin"): ?>
    <li><a href="<?=ROOT?>addJourneys">Add Events</a></li>
<?php 
endif;
endif; 

?>

<li><a href="<?=ROOT?>ContactUs">Contact</a></li>

<li><a href="<?=ROOT?>FAQ">FAQ</a></li>



<?php if(!isset($_SESSION['ID'])): ?>
    <li><a href="<?=ROOT?>login">Log In</a></li>
<?php else: ?>
   <li><a href="<?=ROOT?>viewProfile">Profile</a></li>
    <li><a href="<?=ROOT?>logout">Log Out</a></li>
<?php endif; ?>
 


  <?php if(isset($_SESSION['ID'])&& $_SESSION['role']=="User"): ?>
    <li><a href="<?=ROOT?>selectedEvents"><img src='<?=ASSETS?>img/cart.png' alt='cart' style='width:30px;height:30px;'></a></li>
    <?php endif; ?>

</ul>
</nav>
