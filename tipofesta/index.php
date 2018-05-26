<?php
include_once '../tipofesta/Tipofesta.php';

$tipofesta = new Tipofesta();
$arTipofesta = $tipofesta->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Qual será o tema para sua festa?</h1>

    <a class= "btn btn-info" href=formulario.php>Nova Festa</a>

    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td align="center">Ações</td>
            <td>Id Festa</td>
            <td>Nome</td>
        </tr>

        <?php foreach ($arTipofesta as $tipofesta) {
            echo "
            <tr>
                <td style='width: 151px'><a href='processamento.php?acao=excluir&id_tp_festa={$tipofesta['id_tp_festa']}' class='btn btn-danger'>Excluir</a>
                    <a href='formulario.php?id_tp_festa={$tipofesta['id_tp_festa']}' class='btn btn-warning'>Alterar</a>
                </td>
                <td>{$tipofesta['id_tp_festa']}</td>
                <td>{$tipofesta['nome']}</td>
            </tr>
            ";
        }?>
    </table>

<?php
include_once '../rodape.php';