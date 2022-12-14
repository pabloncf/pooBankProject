<?php

include('C:/xampp/htdocs/pooProjectBank/controller/conexao.php');

class OpenAccount{
    public function insertData($envio_nome, $envio_email, $envio_cpf, $envio_tel){
        $conn = new DBConnect;

        $saldo_conta = 0;

        echo $saldo_conta;

        $query = "INSERT INTO users (nome,email,cpf,telefone,saldo) VALUE ('$envio_nome', '$envio_email', '$envio_cpf', '$envio_tel', '$saldo_conta')";

        $conn->conn->query($query);
    }
}

?>