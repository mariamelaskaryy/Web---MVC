<?php


 
class User {
 
 
    public function Login($POST){
        $DB= new Database();

        $_SESSION["err"]="";

        if(isset($POST['Submit']) ){
            echo $POST['email'];
        $email=$POST['email'];
        $password=$POST['password'];
       

        $sql =  "select * from users where Email ='$email' AND Password =' $password' limit 1";
        echo "$sql";
        $arr['email']=$email;
        $arr['password']=$password;

    
        $data=$DB->read($sql,$arr);

        if(is_array($data)){
            $_SESSION["ID"]=$data[0]->ID;
            $_SESSION["email"]=$data[0]->Email;
            $_SESSION["name"]=$data[0]->Name;
            $_SESSION["role"]=$data[0]->Role;

            header("Location:". ROOT . "index");
				die;

        }
        else {
        $_SESSION["err"]="Wrong email or password.";
        }
    } else{
        $_SESSION["err"]="Please enter a valid email and password.";
    }
        
    
    }
    
    
      public function AddUser($POST){ //function
        $DB = new Database();

        $matchPasswordError="";

		$_SESSION['password_error'] = "";
        $_SESSION["email_error"] = "";
      

        if(isset($POST['Submit']) ) 
		{  //submit

        if ( $POST['password']!=$POST['passwordConfirm'] ){ 
            $_SESSION['password_error'] ="passwords do not match";
        }
        else{

        if(!filter_var($POST['email'], FILTER_VALIDATE_EMAIL)) { //mail


        $arr['role']="User";
        $arr['name'] = $POST['name'];
        $arr['birthday'] = $POST['birthday'];
        $arr['email'] = $POST['email'];
        $arr['password'] = $POST['password'];
        $arr['passwordConfirm'] = $POST['password'];
        $role="User";
       


        $sql  = "INSERT into Users (Name, Email, Birthdate,Phone, Password, ConfirmPassword,Role) 
        VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["birthday"]."','".$_POST["phone"]."',' ".$_POST["password"]." ',' ".$_POST["passwordConfirm"]." ','".$role."') ";
        echo "$sql";
    
        $data = $DB->write($sql ,$arr);
        if($data)
        {

            header("Location:". ROOT . "login");
            die;
        }  

      } //mail

      else{
            $_SESSION['email_error'] = "Incorrect email";
            echo "Incorrect email";
        } 

    } //else password
       
    
    }//submit
 		

    }//function

 public function viewUser(){

 $id=$_SESSION['ID'];
            $sql = "select * from Users where ID=$id";

        $DB = new Database();
        $data = $DB->read($sql);
        if(is_array($data))
        {

            return $data[0];
        }

        return false;
    }

    function editProfile($POST){
         $id=$_SESSION['ID'];

         $DB = new Database();
           if(isset($POST['submitUpdate']) )
        {
        

        $fullname = $POST['Name'];
        $phone = $POST['Phone'];
        $email = $POST['Email'];
        $password = $POST['Password'];
        $bio = $POST['Bio'];
     
       


 $sql = "update Users set Name='$fullname',Password='$password', Email='$email', Bio='$bio', Phone='$phone' where ID=$id;";
        echo "$sql";
        $data = $DB->write($sql);
    }
        
    }
 
    function logout()
	{
		//logged in
		
        session_unset();
        session_destroy(); 

		header("Location:". ROOT . "index");
		die;
	}

    

   
      }


    