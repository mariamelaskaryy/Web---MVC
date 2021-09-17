<?php

Class Home extends Controller
{
    function index(){
       
        $DB= new Database();
        $data['result']=$DB->read("select * from users");
        $data['page_title']="a page title";
        
        $reviews = $this->loadModel("reviews1");
        $result=$reviews->viewReviews();

        $data['reviews']=$result;

        $this->view("index",$data);
        
    }
  
}


?>