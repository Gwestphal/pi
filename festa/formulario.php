<?php
include_once 'Festa.php';

$festa= new Festa();
$arFesta = $festa->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Nova Música</h1>
<div class="container">
    <form class="form-horizontal" action="processamento.php?acao=salvar" method="post">
        <div class="form-group">
            <label for="endereco" class="col-sm-2 control-label">Endereço</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="endereco" name="endereco">
            </div>
        </div>
        <div class="form-group">
            <label for="data" class="col-sm-2 control-label">Data</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="data" name="data">
            </div>
        </div>
        <div class="form-group">
            <label for="horario" class="col-sm-2 control-label">Horário</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="horario" name="horario">
            </div>
        </div>
        <div class="form-group">
            <label for="numeroconvidados" class="col-sm-2 control-label">Número de Convidados</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="numeroconvidados" name="numeroconvidados">
            </div>
        </div>
        <div class="form-group">
            <label for="cliente_idcliente" class="col-sm-2 control-label">Responsável</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="cliente_idcliente" name="cliente_idcliente">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="../cliente/index.php" class="btn btn-danger">Voltar</a>
            </div>
    </form>
</div>
<?php
include_once '../rodape.php';