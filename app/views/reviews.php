<html>

<link href="<?=ASSETS?>css/forms1.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<?php include ('menu.php'); ?>
<br>
<form action="" method="POST"  class='center'>
   <div class="container">
<h1>Review </h1> 
 
  <br>

 Name: <br>
 <input type="text" name="name" required="" > <br>

 Profession: <br>
 <input type="text" name="profession" required="" >
  
  <br> <br>

  Rate: 
  <div class="rating">
        <label aria-label="1 star" class="rating__label" for="rating-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
        <input class="rating__input" name="rating" id="rating-1" value="1" type="radio"checked>

        <label aria-label="2 stars" class="rating__label" for="rating-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
        <input class="rating__input" name="rating" id="rating-2" value="2" type="radio">

        <label aria-label="3 stars" class="rating__label" for="rating-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
        <input class="rating__input" name="rating" id="rating-3" value="3" type="radio" >

        <label aria-label="4 stars" class="rating__label" for="rating-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
        <input class="rating__input" name="rating" id="rating-4" value="4" type="radio">

        <label aria-label="5 stars" class="rating__label" for="rating-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
        <input class="rating__input" name="rating" id="rating-5" value="5" type="radio">
  </div>

<br><br>
 Review:<br>
<textarea rows="4" name="message" class="textarea" required=""> </textarea>

<input type="submit" value="Submit" class="submitbutton" name="Submit">
</div>
</form>


</body>



</html>
