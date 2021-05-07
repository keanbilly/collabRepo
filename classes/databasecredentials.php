<?php

class DataBaseConnect{

    private $username= "root";
    private $password ="";
    private $server ="localhost";
    private $db ="collabdatabase";

    public function DatabaseConnection(){

        $mysql = mysqli_connect($this->server, $this->username, $this->password, $this->db);
        if($mysql){
            echo 'connected';
            return $mysql;
        }
        else{
            die();
        }
    }
}

?>