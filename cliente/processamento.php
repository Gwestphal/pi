<?php
include_once 'Cliente.php';

$cliente = new cliente();


switch ($_GET['acao']){
    case 'salvar';
        if(!empty($_POST['idCliente'])){
            $cliente->alterar($_POST);
        } else{
            $cliente->inserir($_POST);
        }
        break;
    case 'excluir';
        $cliente->excluir($_GET['idCliente']);
        break;
}


header('location: index.php');