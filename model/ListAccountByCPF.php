<?php
include('C:/xampp/htdocs/pooProjectBank/controller/conexao.php');

class ListAccountByCPF{
    public function listAccount($CPFValidation){
        $conn = new DBConnect;

        $query = "SELECT * FROM users WHERE cpf IN ($CPFValidation)";

        $sendQuery = $conn->conn->query($query);

        $assocQuery = mysqli_fetch_all($sendQuery, MYSQLI_ASSOC);

        echo "<pre>";
        print_r($assocQuery);
        echo "</pre>";
    }
    
}
?>