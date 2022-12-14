<?php
include('C:/xampp/htdocs/pooProjectBank/model/OpenAccount.php');

$openaccount = new OpenAccount;
$openaccount->insertData($_GET['nome'], $_GET['email'], $_GET['cpf'], $_GET['telefone']);

?>