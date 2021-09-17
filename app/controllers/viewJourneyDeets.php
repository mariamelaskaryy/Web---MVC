<?php

Class ViewJourneyDeets extends Controller
{
    function index($link = '')
	{
 	 	
		if($link == "")
		{

			$data['page_title'] = "Journey not found";
			$this->view("404",$data);
		}else{

	 	 	$journey = $this->loadModel("journeys");
            $result=$journey->selectJourney($link);
            $result2=$journey->viewParticpants($link);
            

	 	 	$data['journeys'] = $result;
	 	 	$data['particpants']=$result2;

	 	 	
	 	 	$data['title'] = "Single Journey Details";
			$this->view("ViewJourneyDeets",$data);
		}

	}
}
