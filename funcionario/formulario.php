<?php
include_once 'Funcionario.php';
include_once '../especialidade/Especialidade.php';

$funcionario = new Funcionario();
$arFuncionario = $funcionario->recuperarDados();

$especialidade = new Especialidade();
$arEspecialidade = $especialidade->recuperarDados();

if (!empty($_GET['idfuncionarios'])) {
    $funcionario->carregarPorId($_GET['idfuncionarios']);
}

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Novo Funcionário</h1>
    <div class="container">
        <form class="form-horizontal" action="processamento.php?acao=salvar" method="post">
            <input type="hidden" name="idfuncionarios" id="idfuncionarios"
                   value="<?= $funcionario->getIdfuncionarios() ?>">

            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nome" name="nome"
                           value="<?= $funcionario->getNome() ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="cpf" class="col-sm-2 control-label">CPF</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="cpf" name="cpf" value="<?= $funcionario->getCpf() ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="rg" class="col-sm-2 control-label">RG</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="rg" name="rg" value="<?= $funcionario->getRg() ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="telefone" class="col-sm-2 control-label">Telefone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telefone" name="telefone"
                           value="<?= $funcionario->getTelefone() ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="celular" class="col-sm-2 control-label">Celular</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="celular" name="celular"
                           value="<?= $funcionario->getCelular() ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="endereco" class="col-sm-2 control-label">Endereço</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="endereco" name="endereco"
                           value="<?= $funcionario->getEndereco() ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">E-Mail</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email"
                           value="<?= $funcionario->getEmail() ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="id_especialidade" class="col-sm-2 control-label">Especialidade</label>
                <div class="col-sm-10">
                    <select class="form-control" name="id_especialidade" id="id_especialidade">
                        <option value="Selecione">Selecione</option>

                        <?php foreach ($arEspecialidade as $especialidade) { ?>
                            <?php $checked = $especialidade['id_especialidade'] == $funcionario->getIdEspecialidade() ? 'selected' : '';
                            echo "<option $checked value='{$especialidade['id_especialidade']}'>{$especialidade['nome']}</option>";
                        } ?>
                    </select>

                </div>
            </div>
            <div class="form-group">
                <label for="sexo" class="col-sm-2 control-label">Sexo</label>
                <div class="col-sm-10">
                    <label for="sexoM" class="radio-inline">
                        <input type="radio" value="M" <?= (($funcionario->getSexo()) == 'M') ? 'Checked' : '' ?>
                               class="radio" id="sexoM" name="sexo" required>Masculino
                    </label>
                    <label for="sexoF" class="radio-inline">
                        <input type="radio" value="F" <?= (($funcionario->getSexo()) == 'F') ? 'Checked' : '' ?>
                               class="radio" id="sexoF" name="sexo" required>Feminino
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="uf" class="col-sm-2 control-label">UF</label>
                <div class="col-sm-10">
                    <select class="form-control" name="uf" id="uf">
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
                    <a href="../funcionario/index.php" class="btn btn-danger">Voltar</a>
                </div>
        </form>
    </div>
<?php
include_once '../rodape.php';