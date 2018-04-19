<?php
/**
 * Created by PhpStorm.
 * User: douglas
 * Date: 23/03/18
 * Time: 08:07
 */
include('../Include/Navbar.php');
?>
<title>Choice Funcionário</title>

<!--<!-- Aqui entra o conteúdo da página-->
<div class="container">

    <div class="col s2 m1">
        <div class="row">
            <h3 class="header">Novo Cadastro</h3>
            <div class="card horizontal card-choice">
                <div class="card-image">
                    <img src="https://lorempixel.com/100/190/nature/6">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>Seja um novo funcionário da empresa !</p>
                        <p>Faça parte da nossa equipe !</p>
                    </div>
                    <div class="card-action">
                        <a href="../Views/funcionarios_form.php">Fazer parte</a>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="header">Consultar</h3>
        <div class="row">
            <div class="card horizontal card-choice">
                <div class="card-image">
                    <img src="https://lorempixel.com/100/190/nature/6">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>Consulte os funcionários da empresa !</p>
                    </div>
                    <div class="card-action">
                        <a href="../Views/funcionarios_index.php">Fazer consulta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<?php
// depois resolver o bug deste include
include('../Include/footer.php');

?>

<style>
    .card-choice {
        height: 250px;
        width: 400px;
    }
</style>