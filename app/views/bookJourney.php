<?php
 include "Menu.php";
?>



<?=$data['journeys']->Name?>

<?php show($data); ?>



<?php




$id= $data['journeys']->ID;

echo $id;

if($_SESSION["ID"]==NULL){ //login page
   
    header("Location: http://localhost/minima/public/login");
    exit();
  
}
else{
    $Journey = new Journeys();
    $result= $Journey->selectedJourney($id);
    

}
