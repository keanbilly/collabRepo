<?php
include './classes/databasecredentials.php';

class signup extends DataBaseConnect{


    public function Registration($Fname, $Lname, $Email, $Bday, $Username, $Password){

        $db = $this->DatabaseConnection();

        $sql = "SELECT id FROM login_credentials WHERE username = '".$Username."'";
        $result = mysqli_query($db,$sql);

        //echo "connected";
              
       

      $count = mysqli_num_rows($result);
        
        // If result matched $myusername and $mypassword, table row must be 1 row
          
        if($count == 1) {
                     
           echo "invalid username";

        }else {

                $sql1="INSERT INTO login_credentials (Fname, Lname, email, Birthday, username, password)
                values (".$Fname.", ".$Lname.", ".$Email.", ".$Bday.", ".$Username.", ".$Password.")";

                mysqli_query($db, $sql1);

               





                
echo " Added Successfully ";
         


        } 

    }
}