<?php

Class Booking extends Controller
{
    function index()
    {
        $data['page_title'] = "Booking";
        
        if(isset($_POST['Book']))
        {
            
            $rooms = $this->loadModel("booking1");
            $result = $rooms->BookRoom($_POST);
            $data['rooms'] = $result;
            
        }
        
        $this->view("booking", $data);
    }
}

?>