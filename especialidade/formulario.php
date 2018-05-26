<?php
include_once 'Especialidade.php';

$especialidade = new Especialidade();

if (!empty($_GET['id_especialidade'])) {
    $especialidade->carregarPorId($_GET['id_especialidade']);
}

include_once '../cabecalho.php';
?>

<?php if (!empty($_GET)) {
    echo "<h1 class='text-center'>Atualizar Especialidade</h1>";
} else
    echo "<h1 class='text-center'>Nova Especialidade</h1>";
?>

    <form class="form-horizontal" action="processamento.php?acao=salvar" method="post">
        <input type="hidden" name="id_especialidade" value="<?php echo $especialidade->getidespecialidade(); ?>">

        <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome"
                       value="<?php echo $especialidade->getNome(); ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="../especialidade/index.php" class="btn btn-danger">Voltar</a>
            </div>
    </form>

<?php
include_once '../rodape.php';