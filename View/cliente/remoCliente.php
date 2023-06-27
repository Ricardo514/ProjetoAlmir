<?php
include_once '../../BLL/bllCliente.php';
include_once 'C:\xampp\htdocs\servicos\DAL\dalCliente.php';
include_once '../../MODEL/Cliente.php';

$id = $_GET['id'];

$dal = new \DAL\dalCliente();

$dal->Delete($id);

header("location:lstcliente.php");

?>