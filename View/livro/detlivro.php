<?php
include_once 'C:\xampp\htdocs\servicos\BLL\bllLivro.php';

$id = $_GET['id'];

$bll = new  \BLL\bllLivro();
$livro = $bll->SelectID($id);

//echo $livro->getNome();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Livro</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <?php include_once 'C:\xampp\htdocs\servicos\menu.php' ?>
    <div class="container teal lighten-5 black-text col s12"">
        <div class=" center grey grey">
        <h1>Detalhes do Livro</h1>
    </div>

    <div class="row">
        <div class="container">
            <label for="lblID" class="black-text bold">
                <h5>ID: <?php echo $livro->getId(); ?></h5>
            </label>
            <input type="hidden" name="txtId" value="<?php echo $livro->getId(); ?>">
            <label for="lblNome" class="black-text bold">
                <h5>Nome: <?php echo $livro->getNome(); ?></h5>
            </label>
            <input type="hidden" name="txtNome" value="<?php echo $livro->getNome(); ?>">
            <label for="lblValor" class="black-text bold">
                <h5>Valor Do Livro: <?php echo $livro->getValor(); ?></h5>
            </label>
            <input type="hidden" name="txtValor" value="<?php echo $livro->getValor(); ?>">
            <label for="lblData" class="black-text bold">
                <h5>Data de Registro: <?php echo $livro->getData(); ?></h5>
            </label>
            <input type="hidden" name="txtData" value="<?php echo $livro->getData(); ?>">
            <div class="grey darken-3 center col s12">
                <br>
                <br>
                <button class="waves-effect waves-light btn green" type="submit" onclick="JavaScript:location.href='edtLivros.php?id='+<?php echo $livro->getId(); ?>">
                    Editar <i class="material-icons">save</i>
                </button>
                <button class="waves-effect waves-light btn red" type="reset" onclick="JavaScript:remover(<?php echo $livro->getId(); ?>)">
                    Excluir <i class="material-icons">delete_forever</i>
                </button>
                <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lst2livros.php'">
                    Voltar <i class="material-icons">arrow_back</i>
                </button>
                <br>
                <br>
            </div>

        </div>


    </div>

</body>

</html>

<script type="text/javascript">
    function remover(id) {
        if (confirm('Excluir o Livro ' + id + '?')) {
            location.href = 'remoLivro.php?id=' + id;
        }
    }
</script>