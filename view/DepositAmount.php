<?php
include('C:/xampp/htdocs/pooProjectBank/model/Deposit.php');

$depositIn = new DepositInAccount;
$depositIn->deposit($_GET['cpf'],$_GET['deposit']);

?>