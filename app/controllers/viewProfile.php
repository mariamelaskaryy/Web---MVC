<?php

Class viewProfile extends Controller
{
     function index(){

        if(isset($_POST['submitUpdate'])){
         $data['page_title'] = "Edit User";
            $user = $this->loadModel("user");
            $user->editProfile($_POST);
               header("Location:". ROOT . "viewProfile");
        }

      
else{
        $data['pageTitle']="View User";
        $user = $this->loadModel("user");
        $result=$user->viewUser();


        $data['user']=$result;
     }
        $this->view("viewUser",$data);

      
    }

   
    }


?>
     
   
