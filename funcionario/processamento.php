<?php
include_once 'Funcionario.php';

$funcionario = new Funcionario();


switch ($_GET['acao']) {
    case 'salvar';
        $funcionario->inserir($_POST);
        break;
    case 'excluir';
        $funcionario->excluir($_GET['idfuncionarios']);
        break;
}


header('location: index.php');