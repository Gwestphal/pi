<?php
include_once 'Especialidade.php';

$especialidade = new Especialidade();
$arEspecialidade = $especialidade->recuperarDados();

include_once '../cabecalho.php';
?>
    <h1 class="text-center">Especialidades</h1>

    <a class="btn btn-info" href="formulario.php">Nova Especialidade</a>

    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td align="center">Ações</td>
            <td>Id</td>
            <td>Nome</td>
        </tr>

        <?php foreach ($arEspecialidade as $especialidade) {
            echo "
            <tr>
                <td style='width: 151px'><a href='processamento.php?acao=excluir&id_especialidade={$especialidade['id_especialidade']}' class='btn btn-danger'>Excluir</a>
                    <a href='formulario.php?id_especialidade={$especialidade['id_especialidade']}' class='btn btn-warning'>Alterar</a>
                </td>
                <td>{$especialidade['id_especialidade']}</td>
                <td>{$especialidade['nome']}</td>
            </tr>
        ";
        } ?>

    </table>

<?php
include_once '../rodape.php';