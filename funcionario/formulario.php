<?php
include_once 'Funcionario.php';
include_once '../especialidade/Especialidade.php';

$funcionario = new Funcionario();
$arFuncionario = $funcionario->recuperarDados();

$especialidade = new Especialidade();
$arEspecialidade = $especialidade->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Novo Funcionário</h1>
<div class="container">
    <form class="form-horizontal" action="processamento.php?acao=salvar" method="post">
        <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
        </div>
        <div class="form-group">
            <label for="cpf" class="col-sm-2 control-label">CPF</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="cpf" name="cpf">
            </div>
        </div>
        <div class="form-group">
            <label for="rg" class="col-sm-2 control-label">RG</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="rg" name="rg">
            </div>
        </div>
        <div class="form-group">
            <label for="telefone" class="col-sm-2 control-label">Telefone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="telefone" name="telefone">
            </div>
        </div>
        <div class="form-group">
            <label for="celular" class="col-sm-2 control-label">Celular</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="celular" name="celular">
            </div>
        </div>
        <div class="form-group">
            <label for="endereco" class="col-sm-2 control-label">Endereço</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="endereco" name="endereco">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">E-Mail</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="form-group">
            <label for="experiencia" class="col-sm-2 control-label">Especialidade</label>
            <div class="col-sm-10">
                <select class="form-control" name="especialidade" id="especialidade">
                    <option value="Selecione">Selecione</option>
                    <?php foreach ($arEspecialidade as $especialidade) {
                        echo "<option value='{$especialidade['idespecialidade']}'>{$especialidade['nome']}</option>";
                    }?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="sexo" class="col-sm-2 control-label">Sexo</label>
            <div class="col-sm-10">
                <select class="form-control" name="sexo" id="sexo">
                    <option value="">Selecione</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
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