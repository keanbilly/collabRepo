<?php
include './classes/databasecredentials.php';

class signup extends DataBaseConnect{


    public function Registration($Fname, $Lname, $Email, $Bday, $Username, $Password){

        $db = $this->DatabaseConnection();
        $Password = md5($Password);
        $checkDuplicates = 'SELECT * FROM login_credentials WHERE username ="'.$Username.'"';
        $exec = $db->query($checkDuplicates);

        $count = mysqli_num_rows($exec);

           if($count == 0){
            $insertQuery = 'INSERT INTO login_credentials(Fname, Lname, email, Birthday, username, password) 
            VALUES("'.$Fname.'", "'.$Lname.'", "'.$Email.'", "'.$Bday.'", "'.$Username.'", "'.$Password.'")';

            if($db->query($insertQuery)){
                echo '<center><h1>Registration Success</h1></center>';
            }
            else{
                echo $db->error;
            }

           }

           else if($count == 1) {                     
          
            echo '<div class="alert alert-warning">
            <strong>Warning!</strong> Duplicate Username.
            </div>';
            
           }
        
        
    }
}