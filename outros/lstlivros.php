<?php     
    include './DAL/conexao.php';
    use DAL\Conexao;
    $sql = "select * from livro;";
    $con = Conexao::conectar();
    $lstlivros = $con->query($sql);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    
    <title>Listar Livros</title>
</head>

<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Fantasma Livraria</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Logout</a></li>
      </ul>
    </div>
  </nav>

<body>
    <h1>Listar Livros</h1>
    <table class="striped red lighten-2" >
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Valor</th>
            <th>Data</th>
        </tr>
        <?php 
            foreach ($lstlivros as $livro){
        ?>
            <tr>
                <td><?php echo $livro['id']; ?></td>
                <td><?php echo $livro['nome']; ?></td>
                <td><?php echo $livro['valor']; ?></td>
                <td><?php echo $livro['data']; ?></td>
            </tr>
        <?php 
            }
        ?>


    </table>
    
</body>
</html>