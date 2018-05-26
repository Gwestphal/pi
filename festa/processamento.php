<?php
include_once 'Festa.php';

$festa = new Festa();


switch ($_GET['acao']){
    case 'salvar';
        $festa->inserir($_POST);
        break;
    case 'excluir';
        $festa->excluir($_GET['idfesta']);
        break;
}


header('location: index.php');