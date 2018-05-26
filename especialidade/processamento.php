<?php
include_once 'Especialidade.php';

$especialidade = new Especialidade();

switch ($_GET['acao']) {
    case 'salvar':
        if (!empty($_POST['id_especialidade'])) {
            $especialidade->alterar($_POST);
        } else {
            $especialidade->inserir($_POST);
        }
        break;
    case 'excluir':
        $especialidade->excluir($_GET['id_especialidade']);
        break;
}

header('location: index.php');