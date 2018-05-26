<?php
include_once 'Musica.php';

$musica = new Musica();
$arMusica = $musica->recuperarDados();

if (!empty($_GET['id_musica'])) {
    $musica->carregarPorId($_GET['id_musica']);
}


include_once '../cabecalho.php';
?>

<?php if (!empty($_GET)) {
    echo "<h1 class='text-center'>Atualizar Música</h1>";
} else
    echo "<h1 class='text-center'>Nova Música</h1>";
?>

    <div class="container">
        <form class="form-horizontal" action="processamento.php?acao=salvar" method="post">
            <input type="hidden" name="id_musica" value="<?php echo $musica->getIdmusica(); ?>">

            <div class="form-group">
                <label for="artista" class="col-sm-2 control-label">Artista</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="artista" name="artista"
                           value="<?php echo $musica->getArtista(); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="genero" class="col-sm-2 control-label">Gênero</label>
                <div class="col-sm-10">
                    <select class="form-control" name="genero" id="genero" value="<?php echo $musica->getGenero(); ?>">
                        <option value="">Selecione</option>
                        <option value="sertenajo">Sertanejo</option>
                        <option value="funk">Funk</option>
                        <option value="MPB">MPB</option>
                        <option value="POP">POP</option>
                        <option value="internacional">Internacional</option>
                        <option value="rock">Rock</option>
                        <option value="funk">Latina</option>
                        <option value="Rap">Rap</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <a href="../musica/index.php" class="btn btn-danger">Voltar</a>
                </div>
        </form>
    </div>
<?php
include_once '../rodape.php';