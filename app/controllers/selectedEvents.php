<?php

Class selectedEvents extends Controller 
{
	function index()
	{
		$data['pageTitle']="Cart";
        $journeys = $this->loadModel("journeys");
        $result=$journeys->viewJourneysInCart();

		
        $data['journeys']=$result;
        $this->view("selectedEvents",$data);

 	 	

	}
		

}