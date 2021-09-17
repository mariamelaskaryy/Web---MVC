<?php

Class Reviews extends Controller
{
    function index()
    {
        $data['page_title'] = "Reviews";
        
        if(isset($_POST['Submit']))
        {
            
            $reviews = $this->loadModel("reviews1");
            $result = $reviews->AddReview($_POST);
            $data['reviews'] = $result;
        }
        
        $this->view("reviews", $data);
    }
    
    
}


?>