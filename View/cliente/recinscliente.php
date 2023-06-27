<?php
include_once 'C:\xampp\htdocs\servicos\DAL\dalCliente.php';
include_once '../../MODEL/Cliente.php';


$cliente = new \MODEL\Cliente();

$cliente->setNome($_POST['txtNome']);
$cliente->setLivro($_POST['txtLivro']);
$cliente->setTotal($_POST['txtTotal']);

echo "Nome: " . $cliente->getNome() ."</br>";

$dal = new \DAL\dalCliente(); 

$dal->Insert($cliente); 

header("location:lstCliente.php");

?>
