<?php

class DBConnect{

    public $conn;

    public function __construct()
    {
        include "C:/xampp/pass.php";

        $this->conn = new mysqli($server_name,$user,$password,$dbname);

        if($this->conn){
            //echo "conectado";
        }
        else{
           echo die(mysqli_connect_error());
        }
    }
}


?>