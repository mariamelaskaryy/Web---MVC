<?php

Class singleJourney extends Controller
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

	 	 	$data['journeys'] = $result;
	 	 	
	 	 	$data['title'] = "Single Journey";
			$this->view("singleJourney",$data);
		}

	}

   
    }


?>