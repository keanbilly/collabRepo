<?php
include './classes/databasecredentials.php';

class LogIn extends DataBaseConnect{

    public function LoginProcess(){
        $this->DatabaseConnection();
    }
}
?>