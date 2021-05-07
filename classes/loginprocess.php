<?php
include './classes/databasecredentials.php';

class LogIn extends DataBaseConnect{

    public function LoginProcess($username,$password){
       $db = $this->DatabaseConnection();

        $sql = "SELECT id FROM login_credentials WHERE username = '".$username."' and password = '".$password."'";
        $result = mysqli_query($db,$sql);


                
        

      $count = mysqli_num_rows($result);
        
        // If result matched $myusername and $mypassword, table row must be 1 row
          
        if($count == 1) {
                     
           echo "welcome to mobile legends";

        }else {
           echo "error";
        } 

    }
}