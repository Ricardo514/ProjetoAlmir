<?php
include_once 'C:\xampp\htdocs\servicos\BLL\bllCliente.php';

$id = $_GET['id'];

$bll = new  \BLL\bllCliente();
$cliente = $bll->SelectID($id);

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
  <?php  include_once 'C:\xampp\htdocs\servicos\menu.php' ?>    

<div class="container teal lighten-5 black-text col s12"">
        <div class="center grey grey">
            <h1>Detalhes do Livro</h1>
        </div>

        <div class="row">
            <div class="container">
                <label for="lblID" class="black-text bold">
                    <h5>ID: <?php echo $cliente->getId();?></h5>
                </label>
                <input type="hidden" name="txtId"
                value="<?php echo $cliente->getId(); ?>"
                >
                <label for="lblNome" class="black-text bold">
                    <h5>Nome: <?php echo $cliente->getNome();?></h5>
                </label>
                <input type="hidden" name="txtNome"
                value="<?php echo $cliente->getNome(); ?>"
                >
                <label for="lblValor" class="black-text bold">
                    <h5>Valor Do Livro: <?php echo $cliente->getLivro();?></h5>
                </label>
                <input type="hidden" name="txtValor"
                value="<?php echo $cliente->getLivro(); ?>"
                >
                <label for="lblData" class="black-text bold">
                    <h5>Data de Registro: <?php echo $cliente->getTotal();?></h5>
                </label>
                <input type="hidden" name="txtData"
                value="<?php echo $cliente->getTotal(); ?>"
                >
                <div class="grey darken-3 center col s12">
                    <br>
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit"onclick="JavaScript:location.href='editCliente.php?id='+<?php echo $cliente->getId();?>">
                        Editar <i class="material-icons" >save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset" onclick="JavaScript:remover(<?php echo $cliente->getId();?>)">
                        Excluir <i class="material-icons">delete_forever</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lstCliente.php'">
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
            location.href = 'remoCliente.php?id=' + id;
        }
    }
</script>