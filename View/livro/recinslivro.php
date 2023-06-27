<?php
include_once 'C:\xampp\htdocs\servicos\DAL\dalLivro.php';
include_once '../../MODEL/livro.php';


$livro = new \MODEL\Livro();

$livro->setNome($_POST['txtNome']);
$livro->setValor($_POST['txtValor']);
$livro->setData($_POST['txtData']);

echo "Nome: " . $livro->getNome() ."</br>";

$dal = new \DAL\dalLivro(); 
$dal->Insert($livro); 

header("location:lst2livros.php");

?>
