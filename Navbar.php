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
    <link rel='stylesheet' href='css/materialize.css'>
    <link rel='stylesheet' href='css/custom.css'>
    <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
    <link rel='icon' href='img/logo.PNG' type='text/css'>

    <style>

        #navnavbar {
            position: relative; /* Relativa para entrar o conteúdo na página e não engoli-lo*/

        }

    </style>
</head>
<body>

<!--Navegação-->
<nav class="blue-grey z-depth-4" id="navnavbar">
    <div class="BarraNav">
        <a href="#"><img src="img/logo.PNG" width="136" alt="100"></a>
        <ul id="mobile" class="right hide-on-med-and-down">
            <li><a href="#">Orçamento</a></li>
            <li><a href="#">Cliente</a></li>
            <li><a href="#">Trabalhe conosco</a></li>
            <li><a href="#"><i class="material-icons right">photo</i></a></li>
        </ul>
    </div>
</nav>

<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <h4>EAE MEN</h4>-->
<!--    </div>-->
<!--</div>-->

<!--<!--Rodapé -->
<!--<footer class="page-footer blue-grey" id="navfooter">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col l4 s12">-->
<!--                <h5 class="white-text">Mais informações</h5>-->
<!--                <p class="grey-text text-lighten-4">Somos uma empresa que fundou em 2018 no intuito de alegrar sua-->
<!--                    festa!</p>-->
<!--            </div>-->
<!---->
<!--            <div class="col l4 s12">-->
<!--                <h5 class="white-text">Siga-nos nas redes sociais</h5>-->
<!--                <p class="grey-text text-lighten-4">@suaFESTAaqui</p>-->
<!--                <p class="grey-text text-lighten-4">Facebook/suaFESTAaqui</p>-->
<!--            </div>-->
<!---->
<!--            <div class="col l4 s12">-->
<!--                <h5 class="white-text">MENU</h5>-->
<!--                <ul>-->
<!--                    <li><a class="grey-text text-lighten-3" href="#">HOME</a></li>-->
<!--                    <li><a class="grey-text text-lighten-3" href="#">Orçamento</a></li>-->
<!--                    <li><a class="grey-text text-lighten-3" href="#">Cliente</a></li>-->
<!--                    <li><a class="grey-text text-lighten-3" href="#">Trabalhe conosco</a></li>-->
<!--                </ul>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="footer-copyright">-->
<!--        <div class="container">-->
<!--            © 2018 - Todos os direito reservados-->
<!--            <a class="grey-text text-lighten-4 right" href="#!">Saiba Mais</a>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->
<!---->

<!--Jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Materialize JS-->
<script src="js/materialize.js"></script>
<script>
    $(document).ready(function () {
        $("select").material_select();
    });

</script>