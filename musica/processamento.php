<?php
include_once 'Musica.php';

$musica = new Musica();


switch ($_GET['acao']){
    case 'salvar';
        if(!empty($_POST['idmusica'])){
            $musica->alterar($_POST);
        } else{
            $musica->inserir($_POST);
        }
        break;
    case 'excluir';
        $musica->excluir($_GET['idmusica']);
        break;
}


header('location: index.php');