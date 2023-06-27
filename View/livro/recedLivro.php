<?php
include_once '../../BLL/bllLivro.php';
include_once 'C:\xampp\htdocs\servicos\DAL\dalLivro.php';
include_once '../../MODEL/livro.php';

$livro = new \MODEL\Livro();

$livro->setId($_POST['txtID']);
$livro->setNome($_POST['txtNome']);
$livro->setData($_POST['txtData']);
$livro->setValor($_POST['txtValor']);

$bll = new \BLL\bllLivro();

$bll->Update($livro);
header("location:lst2livros.php");



?>