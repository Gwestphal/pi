<?php
/**
 * Created by PhpStorm.
 * User: douglas
 * Date: 23/03/18
 * Time: 07:22
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='UTF-8'>

    <!--Materialize CSS-->
    <link rel='stylesheet' href='../Public/css/materialize.css'>
    <link rel='stylesheet' href='../Public/css/custom.css'>
    <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
    <link rel='icon' href='../Imagens/logo.PNG' type='text/css'>

    <style>

        #navnavbar {
            position: relative; /* Relativa para entrar o conteúdo na página e não engoli-lo*/

        }

        .fluid-container {
            margin: 5em auto; /* em é mais que 1px e menor que 2px*/
            padding: 0 10em;
        }
    </style>
</head>
<body>

<!--Navegação-->
<nav class="blue-grey z-depth-4" id="navnavbar">
    <div class="BarraNav">
        <a href="../TipoDeFesta.html"><img src="../Imagens/logo.PNG" width="136" alt="100"></a>
        <ul id="mobile" class="right hide-on-med-and-down">
            <li><a href="#">Orçamento</a></li>
            <li><a href="../Views/clientes_form.php">Cliente</a></li>
            <li><a href="../Views/choice.php">Trabalhe conosco</a></li>
            <!-- <li><a href="#"><i class="material-icons right">photo</i></a></li> -->
        </ul>
    </div>
</nav>

<!--Materialize JS-->
<script src="../Public/js/materialize.js"></script>
<script>
    $(document).ready(function () {
        $("select").material_select();
    });

</script>