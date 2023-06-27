<?php

    use DAL\Conexao;

    $usuario = trim($_POST['user']);
    $pwd = trim($_POST['password']);

    include 'C:\xampp\htdocs\servicos\DAL\conexao.php';
    $sql = "select * from usuario where usuario like ?";
    $pdo = Conexao::conectar();
    $query = $pdo->prepare($sql);
    $query->execute (array($usuario));
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    Conexao::desconectar();

    echo $pwd . " - " . $dados['senha'];

    if (md5($pwd) == $dados['senha']){
        session_start();
        $_SESSION['login'] = $dados['usuario'];
        $_SESSION['password'] = $dados['senha'];
        header("location:menu.php");
    }
    else{
        header("location:index.html");
    }

?>