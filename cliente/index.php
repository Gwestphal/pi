<?php
include_once '../cliente/Cliente.php';

$cliente = new Cliente();
$arClientes = $cliente->recuperarDados();

include_once '../cabecalho.php';
?>

    <h1 class="text-center">Clientes</h1>

    <a class= "btn btn-info" href=formulario.php>Novo Cliente</a>

    <table class="table table-bordered table-hover table-striped table-condensed">
        <tr>
            <td align="center">Ações</td>
            <td>Nome</td>
            <td>CPF</td>
            <td>RG</td>
            <td>Sexo</td>
            <td>E-Mail</td>
            <td>Telefone</td>
            <td>Celular</td>
            <td>Endereço</td>
            <td>CEP</td>
            <td>UF</td>
        </tr>

        <?php foreach ($arClientes as $cliente) {
            echo "
            <tr>
                <td style='width: 151px'><a href='processamento.php?acao=excluir&idCliente={$cliente['idCliente']}' class='btn btn-danger'>Excluir</a>
                    <a href='formulario.php?idCliente={$cliente['idCliente']}' class='btn btn-warning'>Alterar</a>
                </td>
                <td>{$cliente['nome']}</td>
                <td>{$cliente['cpf']}</td>
                <td>{$cliente['rg']}</td>
                <td>{$cliente['sexo']}</td>
                <td>{$cliente['email']}</td>
                <td>{$cliente['telefone']}</td>
                <td>{$cliente['celular']}</td>
                <td>{$cliente['endereco']}</td>
                <td>{$cliente['cep']}</td>
                <td>{$cliente['uf']}</td>
            </tr>
            ";
        }?>
    </table>

<?php
include_once '../rodape.php';