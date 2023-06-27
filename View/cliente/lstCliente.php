<?php     
    include_once 'C:\xampp\htdocs\servicos\DAL\dalCliente.php';
   $dal = new \dal\dalCliente();
   
   $lstcliente = $dal->Select();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    
    <title>Listar Cliente</title>
</head>

<?php  include_once 'C:\xampp\htdocs\servicos\menu.php' ?>


<body>
    <h1>Listar Cliente</h1>
    <table class="striped grey darken-3" >
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Total</th>
            <th>Livro</th>
            <th>Função
                <a class="btn-floating btn-small waves-effect waves-light blue" onclick="JavaScript:location.href='insCliente.php'" ><i class="material-icons">add</i></a>
            </th>
        </tr>
        <?php 
            foreach ($lstcliente as $cliente){
        ?>
            <tr>
                <td><?php echo $cliente->getId(); ?></td>
                <td><?php echo $cliente->getNome(); ?></td>
                <td><?php echo "R$" . number_format($cliente->getTotal(), 2, ",", "."); ?></td>
                <td><?php echo $cliente->getLivro(); ?></td>
                <td>
                    <a class="btn-floating btn-small waves-effect waves-light blue" onclick="JavaScript:location.href='editcliente.php?id=' +<?php echo $cliente->getId();?>"><i class="material-icons">edit</i></a>
                    <a class="btn-floating btn-small waves-effect waves-light green" onclick="JavaScript:location.href='detcliente.php?id=' +<?php echo $cliente->getId();?>"><i class="material-icons">details</i></a>
                    <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:remover(<?php echo $cliente->getId();?>)"><i class="material-icons">delete_forever</i></a>
                </td>
            </tr>

        <?php 
            }
        ?>


    </table>
    
</body>
</html>

<script type="text/javascript">
    function remover(id) {
        if (confirm('Excluir o Livro ' + id + '?')) {
            location.href = 'remoCliente.php?id=' + id;
        }
    }
</script>