<?php
 
class Journeys {
 
    private $journeys;

    public function addJourney($POST){
        $DB= new Database();

        $_SESSION["err"]="";

        if(isset($POST['Submit']) ){
    
        
       
        $image = $_FILES['img']['name'];
        $target = "images/".basename($image);


        $sql  = "INSERT into Events (Name, Date, Time,Price, MaxCapacity,Description, Image) 
        VALUES ('".$_POST["journeyName"]."','".$_POST["date"]."','".$_POST["time"]."','".$_POST["price"]."',' ".$_POST["capacity"]." ',' ".$_POST["description"]." ','$image') ";
        echo "$sql";
        
        
        if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
            echo $msg;
          //header("Location:viewHikes.php");  		
        }
        else{
            $msg = "Failed to upload image";
        }
  
        $arr['name'] = $POST['journeyName'];
        $arr['date'] = $POST['date'];
        $arr['time'] = $POST['time'];
        $arr['price'] = $POST['price'];
        $arr['capacity'] = $POST['capacity'];
        $arr['description'] = $POST['description'];
        $arr['image'] = $image;
    
        $data=$DB->write($sql,$arr);

        }
        
    
    }
    
    
      public function viewJourneys(){

		$sql = "select * from Events order by Date ASC";

		$DB = new Database();
		$data = $DB->read($sql);
		if(is_array($data))
		{

			return $data;
		}

		return false;
    
    
    }
 
    function selectJourney($journeyID)
	{
		
    
            $sql = "select * from Events where ID =$journeyID limit 1";
           
            $arr['journeyID'] = $journeyID;
    
            $DB = new Database();
            $data = $DB->read($sql,$arr);
            if(is_array($data))
            {
    
                return $data[0];
            }
    
            return false;
        
	}
	
	
    function viewParticpants($journeyID){
        //$sql ="select * from EventBooking where EventId =$journeyID ";
        $sql="select H.ID,H.Name, H.Email
            from eventbooking S 
            inner join users H on S.UserID = H.ID
            where  (S.EventId =".$journeyID.")";


        $DB = new Database();
        $data = $DB->read($sql);
        
            if(is_array($data))
            {
                return $data;
         
            }
    
            return false;
    }


    function selectedJourney($journeyID){

        $userID=$_SESSION['ID'];

    
    $sql ="select * from EventBooking where UserID =$userID AND EventId =$journeyID limit 1";
    echo "$sql";
    $arr['journeyID']=$journeyID;
    $arr['UserID']=$userID;
    show($arr);

    $DB = new Database();
    $data=$DB->read($sql,$arr);
    show($data);
    $bool= is_array($data);
    echo $bool;

    if(is_array($data)){
       ?>
        <script> alert("You selected this event before, check your cart.");</script>
        <?php

        //header("Location:". ROOT . "index");
            die;

    }
    else 
    {
    $this->addJourneyToCart($journeyID);
    }
}



    function addJourneyToCart($journeyID){

       $UserID=$_SESSION['ID'];

        $sql="INSERT EventBooking (UserID,EventID) 
        VALUES ('".$UserID."','".$journeyID."') ";  
        echo $sql;

        $arr['journeyID'] = $journeyID;

        $DB = new Database();
        $data = $DB->write($sql,$arr);
        ?>
        <script> alert("The event was booked successfully, check your cart.");</script>

         <?php
       }

       function viewJourneysInCart(){
        $date= date('Y-m-d ');
        $id= $_SESSION['ID'];
        $sql="select S.ID, H.Name,H.Date,H.Time, H.Description, H.Price,H.JourneyPoints, H.Image
        from EventBooking S
        inner join Events H on S.EventID = H.ID
        where  (S.UserID =".$id.")";

       

        $sql2="select SUM(Price) AS TotalPrice
        from EventBooking S 
        inner join Events H on S.EventID = H.ID
        where  (S.UserID ='".$id." ' AND Date>'".$date."')";



        $DB = new Database();
        $data = $DB->read($sql);
     
        if(is_array($data))
		{

			return $data;
		}

		return false;
    

       }

       function editJourney($POST,$journeyID){
        $DB = new Database();

       if(isset($POST['submitUpdate']) )
        {
        

        
        $name = $POST['journeyName'];
        $date = $POST['date'];
        $time = $POST['time'];
        $price = $POST['price'];
        $capacity = $POST['capacity'];
        $description = $POST['description'];
     
       }


        $sql = "update events set Name='$name',Date='$date', Time='$time', Description='$description', MaxCapacity='$capacity' where ID=$journeyID;";
     
        $data = $DB->write($sql);
          

       }

    }


    