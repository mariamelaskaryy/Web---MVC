<?php

Class calender extends Controller
{
    function index()
    {
        $data['page_title'] = "Calendar";

        $this->view("calender");
    }
  
}


?>