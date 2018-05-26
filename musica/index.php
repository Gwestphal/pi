<?php
include_once '../musica/Musica.php';

$musica = new Musica();
$arMusica = $musica->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Músicas</h1>

    <a class="btn btn-info" href=formulario.php>Nova Música</a>

    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td align="center">Ações</td>
            <td>Id Música</td>
            <td>Artista</td>
            <td>Gênero</td>
        </tr>

        <?php foreach ($arMusica as $musica) {
            echo "
            <tr>
                <td style='width: 151px'><a href='processamento.php?acao=excluir&id_musica={$musica['id_musica']}' class='btn btn-danger'>Excluir</a>
                    <a href='formulario.php?id_musica={$musica['id_musica']}' class='btn btn-warning'>Alterar</a>
                </td>
                <td>{$musica['id_musica']}</td>
                <td>{$musica['artista']}</td>
                <td>{$musica['genero']}</td>
            </tr>
            ";
        } ?>
    </table>

<?php
include_once '../rodape.php';