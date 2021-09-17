<?php

Class ContactUs extends Controller
{
    function index(){
        $data['page_title'] = "Contact Us";

        if(isset($_POST['Send'])){

            $contact = $this->loadModel("contact1");
            $result = $contact->ContactUs($_POST);
            $data[contact] = $result;
        }

      $this->view("contactUs",$data);

     
    }
   
    }


?>