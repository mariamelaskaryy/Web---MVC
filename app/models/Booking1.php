<?php

Class Booking1
{
  public function BookRoom($POST)
  {
      $DB = new Database();
      
      if(isset($POST['Book']) )
      {
          
          $sql  = "INSERT into reservation (Name, Date, Arrival, Hours, NOP, Email, Phone) 
        VALUES ('".$_POST["name"]."','".$_POST["date"]."','".$_POST["arrival"]."','".$_POST["hours"]."',' ".$_POST["NOP"]." ', '".$_POST["email"]."','".$_POST["phone"]."') ";
          
          $arr['Name'] = $POST['name'];
          $arr['Date'] = $POST['date'];
          $arr['Arrival'] = $POST['arrival'];
          $arr['Hours'] = $POST['hours'];
          $arr['NOP'] = $POST['NOP'];
          $arr['Email'] = $POST['email'];
          $arr['Phone'] = $POST['phone'];
          
          $data = $DB->write($sql ,$arr);
          
          if($data)
        {
            header("Location:". ROOT . "index");
            die;
        }
      
      }
      
  }
}

?>