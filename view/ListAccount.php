<?php
include('C:/xampp/htdocs/pooProjectBank/model/ListAccountByCPF.php');

$list = new ListAccountByCPF();
$list->listAccount($_GET['cpf']);

?>