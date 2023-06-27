<?php
include_once '../../BLL/bllCliente.php';
include_once 'C:\xampp\htdocs\servicos\DAL\dalCliente.php';
include_once '../../MODEL/Cliente.php';

$cliente = new \MODEL\Cliente();

$cliente->setId($_POST['txtID']);
$cliente->setNome($_POST['txtNome']);
$cliente->setLivro($_POST['txtLivro']);
$cliente->setTotal($_POST['txtTotal']);

$bll = new \BLL\bllCliente();

$bll->Update($cliente);

header("location:lstCliente.php");



?>