<?php
include_once 'Funcionario.php';

$funcionario = new Funcionario();
$arFuncionario = $funcionario->recuperarDados();


include_once '../cabecalho.php';
?>

    <h1 class="text-center">Funcionários</h1>

    <a class= "btn btn-info" href=formulario.php>Novo Funcionário</a>

    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td align="center">Ações</td>
            <td>Id Funcionário</td>
            <td>Nome</td>
            <td>CPF</td>
            <td>RG</td>
            <td>Telefone</td>
            <td>Celular</td>
            <td>Endereço</td>
            <td>E-Mail</td>
            <td>Especialidade</td>
            <td>Sexo</td>
            <td>UF</td>
        </tr>

        <?php foreach ($arFuncionario as $funcionario) {
            echo "
            <tr>
                <td style='width: 151px'><a href='processamento.php?acao=excluir&idfuncionarios={$funcionario['idfuncionarios']}' class='btn btn-danger'>Excluir</a>
                    <a href='#' class='btn btn-warning'>Alterar</a>
                </td>
                <td>{$funcionario['idfuncionarios']}</td>
                <td>{$funcionario['nome']}</td>
                <td>{$funcionario['cpf']}</td>
                <td>{$funcionario['rg']}</td>
                <td>{$funcionario['telefone']}</td>
                <td>{$funcionario['celular']}</td>
                <td>{$funcionario['endereco']}</td>
                <td>{$funcionario['email']}</td>
                <td>{$funcionario['idespecialidade']}</td>
                <td>{$funcionario['sexo']}</td>
                <td>{$funcionario['uf']}</td>
            </tr>
            ";
        }?>
    </table>

<?php
include_once '../rodape.php';