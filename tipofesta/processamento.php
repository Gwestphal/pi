<?php
include_once 'Tipofesta.php';

$tipofesta = new Tipofesta();


switch ($_GET['acao']){
    case 'salvar';
        if(!empty($_POST['id_tp_festa'])){
            $tipofesta->alterar($_POST);
        } else{
            $tipofesta->inserir($_POST);
        }
        break;
    case 'excluir';
        $tipofesta->excluir($_GET['id_tp_festa']);
        break;
}


header('location: index.php');