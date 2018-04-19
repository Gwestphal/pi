<?php
/**
 * Created by PhpStorm.
 * User: douglas
 * Date: 23/03/18
 * Time: 07:27
 */
?>
<style>

    #navfooter {

    }
</style>

<!--RODAPÉ PADRÃO PARA TODAS AS PÁGINAS-->
<footer class="page-footer blue-grey" id="navfooter">
    <div class="container">
        <div class="row">
            <div class="col l4 s12">
                <h5 class="white-text">Mais informações</h5>
                <p class="grey-text text-lighten-4">Somos uma empresa que fundou em 2018 no intuito de alegrar sua
                    festa!</p>
            </div>

            <div class="col l4 s12">
                <h5 class="white-text">Siga-nos nas redes sociais</h5>
                <p class="grey-text text-lighten-4">@suaFESTAaqui</p>
                <p class="grey-text text-lighten-4">Facebook/suaFESTAaqui</p>
            </div>

            <div class="col l4 s12">
                <h5 class="white-text">MENU</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#">HOME</a></li>
                    <li><a class="grey-text text-lighten-3" href="#">Orçamento</a></li>
                    <li><a class="grey-text text-lighten-3" href="#">Cliente</a></li>
                    <li><a class="grey-text text-lighten-3" href="#">Trabalhe conosco</a></li>
                </ul>

            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2018 - Todos os direito reservados
            <a class="grey-text text-lighten-4 right" href="#!">Saiba Mais</a>
        </div>
    </div>
</footer>
<!--Materialize JS-->
<script src="../js/materialize.js"></script>
<script>
    $(document).ready(function () {
        $("select").material_select();
    });

</script>