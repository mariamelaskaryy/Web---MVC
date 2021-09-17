<style>
.button1:hover {
  background-color: #4CAF50;
  color: white;
}

</style>

<?php include ('menu.php'); ?>
<link href="<?=ASSETS?>css/forms1.css" rel="stylesheet">
<html>

<body>
   <div class ="center">
    <div class="container"  style="height: 800px">
<br>
<form action="" method="post"  class='Register'  enctype="multipart/form-data" >
<h1>Edit Journey</h1><br><br>
  Journey Name<br>
  <input type="text" name="journeyName" id='Name' placeholder="<?=$data['viewJourney']->Name?>" style="height: 4%" required><br> <br>
  Date <br>
  <input type="date" id="date" name="date"  placeholder="<?=$data['viewJourney']->Date?>"  style="height: 4%" required><br><br>
  Time<br>
  <input type="time" name="time" placeholder="<?=$data['viewJourney']->Time?>"  style="height: 4%"required> <br> <br>
  Price<br>
  <input type="text" name="price" placeholder="<?=$data['viewJourney']->Price?>"  style="height: 4%"required> <br> <br>
  Capacity<br>
  <input type="text" name="capacity" placeholder="<?=$data['viewJourney']->MaxCapacity?>"  style="height: 4%" required> <br> <br>
  Description<br>
  <input type="text" id="description" name="description" placeholder="<?=$data['viewJourney']->Description?>" style="height: 20%"required><br><br>
 Image <br> <br>
<input type="file" id="image" name="img" accept="image/*" hidden>
<label for="image" class='SubmitButton button1'>  Upload Image  </label>

<br><br><br>


 <div class="text-center">
 <input type="reset" class='SubmitButton button1'>   
  <input type="submit" value="Submit" name="submitUpdate" class='SubmitButton button1' >
  
</div>
</form>
       </div>
    </div>
    </body>
</html>