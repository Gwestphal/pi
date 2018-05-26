<?php
include_once '../festa/Festa.php';

$festa = new Festa();
$arFesta = $festa->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Festa Marcadas</h1>

    <a class= "btn btn-info" href=formulario.php>Nova Festa</a>

    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td align="center">Ações</td>
            <td>Id Festa</td>
            <td>Endereço</td>
            <td>Data</td>
            <td>Horário</td>
            <td>NºConvidados</td>
            <td>Responsável</td>
            <td>Decoração</td>
        </tr>

        <?php foreach ($arFesta as $festa) {
            echo "
            <tr>
                <td style='width: 151px'><a href='processamento.php?acao=excluir&idfesta={$festa['idfesta']}' class='btn btn-danger'>Excluir</a>
                    <a href='#' class='btn btn-warning'>Alterar</a>
                </td>
                <td>{$festa['idfesta']}</td>
                <td>{$festa['endereco']}</td>
                <td>{$festa['data']}</td>
                <td>{$festa['horario']}</td>
                <td>{$festa['numeroconvidados']}</td>
                <td>{$festa['cliente_idcliente']}</td>
                <td>{$festa['decoracao_iddecoracao']}</td>
            </tr>
            ";
        }?>
    </table>

<?php
include_once '../rodape.php';