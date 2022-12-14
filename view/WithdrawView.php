<?php
include('C:/xampp/htdocs/pooProjectBank/model/Withdraw.php');

$withdrawIn = new WithdrawInAccount;
$withdrawIn->withdraw($_GET['cpf'],$_GET['saque']);

?>