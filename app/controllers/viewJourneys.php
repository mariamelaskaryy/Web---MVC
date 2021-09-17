<?php

Class ViewJourneys extends Controller
{
    function index(){
        $data['pageTitle']="View Journeys";
        $journeys = $this->loadModel("journeys");
        $result=$journeys->viewJourneys();

        $data['journeys']=$result;
        $this->view("journeys/viewJourneys",$data);
      
    }
}

     
   
