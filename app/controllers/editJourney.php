<?php

Class editJourney extends Controller
{
     function index($link = ''){
        if($link == "")
        {

            $data['page_title'] = "Journey not found";
            $this->view("404",$data);
        }
        else{
            $journey = $this->loadModel("journeys");

            if(isset($_POST['submitUpdate'])){
            $result2= $journey->editJourney($_POST,$link);
  
              }

           else{

            $result=$journey->selectJourney($link);

            

            $data['viewJourney'] = $result;

            }
            $data['title'] = "Edit Journey";
            $this->view("editJourney",$data);

        }

        }

   
    }


?>
     
   
