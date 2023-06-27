<?php
include_once 'C:\xampp\htdocs\servicos\BLL\bllLivro.php';

$id = $_GET['id'];

$bll = new  \BLL\bllLivro();
$livro = $bll->SelectID($id);


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <?php  include_once 'C:\xampp\htdocs\servicos\menu.php' ?>
    <div class="container teal lighten-5 black-text col s12">
        <div class="center grey grey">
            <h1>Editar Inf Livro</h1>
        </div>

        <div class="row">
            <form action="recedLivro.php" method="POST" id="" class="col s12">
                <div class="input-field col s8">
                    <label for="id" class="black-text bold">ID: <?php echo $livro->getId(); ?></label>
                    </br> </br>
                    <input type="hidden" name="txtID" value=<?php echo $id; ?>>
                </div>

                <div class="input-field col s8">
                    <input id="nome" type="text" name="txtNome" value="<?php echo $livro->getNome() ?>">
                    <label for="nome" class="black-text bold">Nome</label>
                </div>
                <div class="input-field col s8">
                    <input id="data" type="date" name="txtData" value="<?php echo $livro->getData() ?>">
                    <label for="data" class="black-text bold">Data de Registro</label>
                </div>
                <div class="input-field col s8">
                    <input id="salario" type="text" name="txtValor" value="<?php echo $livro->getValor() ?>">
                    <label for="salario" class="black-text bold">Valor</label>
                </div>
                <div class="grey darken-3 center col s12">
                    <br>
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lst2livros.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                    <br>
                    <br>
                </div>


            </form>
        </div>



    </div>

</body>

</html>