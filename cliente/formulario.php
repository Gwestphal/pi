<?php
include_once 'Cliente.php';

$cliente = new cliente();
$arcliente = $cliente->recuperarDados();

if (!empty($_GET['id_cliente'])) {
    $cliente->carregarPorId($_GET['id_cliente']);
}

include_once '../cabecalho.php';
?>


<?php if (!empty($_GET)) {
    echo "<h1 class='text-center'>Atualizar Cliente</h1>";
} else
    echo "<h1 class='text-center'>Novo Cliente</h1>";
?>

    <div class="container">
        <form class="form-horizontal" action="processamento.php?acao=salvar" method="post">
            <input type="hidden" name="id_cliente" value="<?= $cliente->getIdCliente(); ?>">

            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nome" name="nome" value="<?= $cliente->getNome(); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="cpf" class="col-sm-2 control-label">CPF</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="cpf" name="cpf" value="<?= $cliente->getCpf(); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="rg" class="col-sm-2 control-label">RG</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="rg" name="rg" value="<?= $cliente->getRg(); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="sexo" class="col-sm-2 control-label">Sexo</label>
                <div class="col-sm-10">
                    <label for="sexoM" class="radio-inline">
                        <input type="radio" value="M" <?= (($cliente->getSexo()) == 'M') ? 'Checked' : '' ?>
                               class="radio" id="sexoM" name="sexo" required>Masculino
                    </label>
                    <label for="sexoF" class="radio-inline">
                        <input type="radio" value="F" <?= (($cliente->getSexo()) == 'F') ? 'Checked' : '' ?>
                               class="radio" id="sexoF" name="sexo" required>Feminino
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">E-Mail</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email"
                           value="<?= $cliente->getEmail(); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="telefone" class="col-sm-2 control-label">Telefone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telefone" name="telefone"
                           value="<?= $cliente->getTelefone(); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="celular" class="col-sm-2 control-label">Celular</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="celular" name="celular"
                           value="<?= $cliente->getCelular(); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="endereco" class="col-sm-2 control-label">Endereço</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="endereco" name="endereco"
                           value="<?= $cliente->getEndereco(); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="cep" class="col-sm-2 control-label">CEP</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="cep" name="cep" value="<?= $cliente->getCep(); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="uf" class="col-sm-2 control-label">UF</label>
                <div class="col-sm-10">
                    <select class="form-control" name="uf" id="uf" value="<?= $cliente->getUf(); ?>">
                        <option value="Selecione">Selecione</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PR</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
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