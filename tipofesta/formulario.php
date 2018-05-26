<?php
include_once 'Tipofesta.php';

$tipofesta= new Tipofesta();
$arTipofesta = $tipofesta->recuperarDados();

if(!empty($_GET['id_tp_festa'])){
    $tipofesta->carregarPorId($_GET['id_tp_festa']);
}

include_once '../cabecalho.php';
?>

<?php if(!empty($_GET)){
    echo "<h1 class='text-center'>Atualizar Tema Festa</h1>";
}else
    echo "<h1 class='text-center'>Novo Tema Para Festa</h1>";
?>

<div class="container">
    <form class="form-horizontal" action="processamento.php?acao=salvar" method="post">
        <input type="hidden" name="id_tp_festa" value="<?php echo $tipofesta->getIdTpFesta(); ?>">

        <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Tema</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $tipofesta->getNome(); ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="../tipofesta/index.php" class="btn btn-danger">Voltar</a>
            </div>
    </form>
</div>
<?php
include_once '../rodape.php';