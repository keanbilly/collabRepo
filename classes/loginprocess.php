<?php
session_start();
include './classes/databasecredentials.php';

class LogIn extends DataBaseConnect{

    public function LoginProcess($username,$password){
       $db = $this->DatabaseConnection();

        $sql = 'SELECT * FROM login_credentials WHERE username = "'.$username.'" AND password = "'.md5($password).'"';
        $res = $db->query($sql);
        
        if($res->num_rows>0){
           while($record = $res->fetch_assoc()){
            $username = $record['username'];
           }
           $_SESSION['username'] = $username;
           header('Location: ./dashboard/dashboard.php');
        }  
        else{
           echo 'False';
        }
      //   if($count == 1) {
                     
      //      echo "welcome to mobile legends";

      //   }else {
      //      echo "error";
      //   } 

    }
}