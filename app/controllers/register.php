<?php

Class Register extends Controller
{
    function index(){
        $data['page_title'] = "Register";

        if(isset($_POST['Submit'])){

            $user = $this->loadModel("user");
            $user->AddUser($_POST);
        }

      $this->view("register",$data);

     
    }
   
    }


?>