<?php
include('C:/xampp/htdocs/pooProjectBank/controller/conexao.php');

class WithdrawInAccount{
    public function withdraw($CPFValidation, int $withdrawAmount){
        $conn = new DBConnect;

        $querySaldo = "SELECT saldo FROM users WHERE cpf IN ($CPFValidation)";
        $resultQuerySaldo = $conn->conn->query($querySaldo);
        $queryArrayResult = mysqli_fetch_row($resultQuerySaldo);

        $queryResultNumber = $queryArrayResult[0];

        $totalWithdraw = $queryResultNumber - $withdrawAmount;

        
        if($totalWithdraw < $withdrawAmount){
            print_r("Você não tem saldo suficiente para sacar.");
            echo "<br>";
            print_r("Seu saldo atual é de: R$$totalWithdraw,00");
        }
        else{
            $query = "UPDATE `users` SET `saldo` = '$totalWithdraw' WHERE cpf IN ($CPFValidation)";
            $conn->conn->query($query);
            print_r("Seu saldo atual é de: R$$totalWithdraw,00");
        }

        
    }
}

?>