<?php

Class AddJourneys extends Controller
{
    function index(){
        $data['page_title'] = "Add Journeys";

        if(isset($_POST['Submit'])){

            $journey = $this->loadModel("journeys");
            $journey->addJourney($_POST);
        }

      $this->view("addJourney",$data);

     
    }
   
    }


?>