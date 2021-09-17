<?php

Class App
{

private $controller = "home";
private $method = "index";
private $params = [];


function __construct(){
  $url = $this->splitURL();

  if(file_exists("../app/controllers/". strtolower($url[0]) .".php"))
  {
      //class
      $this->controller = strtolower($url[0]);
      unset($url[0]);
  }
  require "../app/controllers/". $this->controller .".php";
  //class
  $this->controller = new $this->controller;

  //method
  if(isset($url[1])) 
 		{
 			if(method_exists($this->controller, $url[1]))
 			{
 				$this->method = $url[1];
 				unset($url[1]);
 			}
 		}
         //set starting point of arr to zeros
         $this->params = array_values($url);
        
         call_user_func_array([$this->controller,$this->method], $this->params); 
          //creating a router
        }

private function splitURL(){

    $url = isset($_GET['url']) ? $_GET['url'] : "homepage"; 
		return explode("/", filter_var(trim($url,"/"),FILTER_SANITIZE_URL)); 
}

}