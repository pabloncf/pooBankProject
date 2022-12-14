<?php
include('C:/xampp/htdocs/pooProjectBank/controller/conexao.php');

class DepositInAccount{
    public function deposit($CPFValidation, int $depositAmount){
        $conn = new DBConnect;

        $querySaldo = "SELECT saldo FROM users WHERE cpf IN ($CPFValidation)";
        $resultQuerySaldo = $conn->conn->query($querySaldo);
        $queryArrayResult = mysqli_fetch_row($resultQuerySaldo);

        $queryResultNumber = $queryArrayResult[0];

        $totalDeposit = $queryResultNumber + $depositAmount;

        print_r("Seu saldo atual é de: R$$totalDeposit,00");

        $query = "UPDATE `users` SET `saldo` = '$totalDeposit' WHERE cpf IN ($CPFValidation)";
        $conn->conn->query($query);
    }
}

?>