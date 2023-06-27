<?php
include_once '../../BLL/bllLivro.php';
include_once 'C:\xampp\htdocs\servicos\DAL\dalLivro.php';
include_once '../../MODEL/livro.php';

$id = $_GET['id'];

$dal = new \DAL\dalLivro();

$dal->Delete($id);
header("location:lst2livros.php");

?>