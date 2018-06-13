<?php
include_once 'Festa.php';
include_once '../tipofesta/Tipofesta.php';
include_once '../cliente/Cliente.php';

// instancia tudo de festa
$festa = new Festa();
$arFesta = $festa->recuperarDados();

// instancia tudo de tipo de festa
$tipofesta = new Tipofesta();
$arTipofesta = $tipofesta->recuperarDados();

// instancia tudo de cliente
$cliente = new cliente();
$arcliente = $cliente->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Nova Festa</h1>
    <div class="container">

        <form class="form-horizontal" action="processamento.php?acao=salvar" method="post">
            <input type="text" name="id_festa" value="<?= $festa->getIdFesta(); ?>">
            <div class="form-group">
                <label for="endereco" class="col-sm-2 control-label">Endereço</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="endereco" name="endereco"
                           value="<?= $festa->getEndereco() ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="data" class="col-sm-2 control-label">Data</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="data" name="data" value="<?= $festa->getData() ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="horario" class="col-sm-2 control-label">Horário</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="horario" name="horario"
                           value="<?= $festa->getHorario() ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="numeroconvidados" class="col-sm-2 control-label">Número de Convidados</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="numeroconvidados" name="numeroconvidados"
                           value="<?= $festa->getNumeroconvidados() ?>" maxlength="6">
                </div>
            </div>
            <div class="form-group">
                <label for="id_tp_festa" class="col-sm-2 control-label">Tipo de festa</label>
                <div class="col-sm-10">

                    <select class="form-control" name="id_tp_festa" id="id_tp_festa">
                        <option value="">Selecione</option>

                        <?php foreach ($tipofesta as $tema) { ?>
                            <?php $checked = $tema['id_tp_festa'] == $festa->getIdTpFesta() ? 'selected' : ''; ?>
                            <option <?= $checked ?>
                                    value=" <?= $tema['id_tp_festa'] ?>"><?= $tema['nome'] ?></option>
                        <?php } ?>

                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="id_cliente" class="col-sm-2 control-label">Responsável</label>
                <div class="col-sm-10">

                    <select class="form-control" name="id_cliente" id="id_cliente">
                        <option value="">Selecione</option>

                        <?php foreach ($arcliente as $cliente) { ?>
                            <?php $checked = $cliente['id_cliente'] == $festa->getIdCliente() ? 'selected' : ''; ?>
                            <option <?= $checked ?>
                                    value=" <?= $cliente['id_cliente'] ?>"><?= $cliente['nome'] ?></option>
                        <?php } ?>

                    </select>
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