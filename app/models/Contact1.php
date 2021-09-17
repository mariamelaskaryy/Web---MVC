<?php

Class Contact1
{
  
  public function ContactUs($POST)
  {
      $DB = new Database();
      
      if(isset($POST['Send']) )
      {
        $sql  = "INSERT into contactus1 (Name, Email, Subject, Message) 
        VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["subject"]."','".$_POST["message"]."')";
          
          $arr['Name'] = $POST['name'];
          $arr['Email'] = $POST['email'];
          $arr['Subject'] = $POST['subject'];
          $arr['Message'] = $POST['message'];
                    
          $data = $DB->write($sql ,$arr);
          
          if($data)
        {
            echo '<script>alert("Thank you for your response")</script>';
            header("Location:". ROOT . "index");
            die;
        }
      
      
          
      }
      
  }
}

?>