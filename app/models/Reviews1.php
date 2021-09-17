<?php

Class Reviews1
{
    public function AddReview($POST)
    {
        $DB = new Database();
        
        if(isset($POST['Submit']))
        {
            $sql  = "INSERT into reviews (EventID, UserID, Rating, Review) 
        VALUES ('".$_POST["EID"]."','".$_POST["UID"]."','".$_POST["rating"]."','".$_POST["message"]."') ";
            
        
        $arr['EventID'] = $POST['EID'];
        $arr['UserID'] = $POST['UID'];
        $arr['Rating'] = $POST['rating'];
        $arr['Review'] = $POST['message'];
            
        $data = $DB->write($sql ,$arr);
            
        if($data)
        {
            header("Location:". ROOT . "index");
            die;
        }
        }
    }


    function viewReviews(){
        $sql = "select * from reviews";

        $DB = new Database();
        $data = $DB->read($sql);
        if(is_array($data))
        {

            return $data;
        }

        return false;
    }
}

?>