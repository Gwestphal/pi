<?php

include_once '../Conexao.php';

class Tipofesta{

    protected $id_tp_festa;
    protected $nome;

    /**
     * @return mixed
     */
    public function getIdTpFesta()
    {
        return $this->id_tp_festa;
    }

    /**
     * @param mixed $id_tp_festa
     */
    public function setIdTpFesta($id_tp_festa)
    {
        $this->id_tp_festa = $id_tp_festa;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }



    public function recuperarDados(){
        $conexao = new Conexao();
        $sql = "select * from tipo_festa";
        return $conexao->recuperarDados($sql);
    }

    public function inserir($dados){

        $nome = $dados['nome'];

        $conexao = new Conexao();

        $sql = "insert into tipo_festa (nome) values('$nome');";


        return $conexao->executar($sql);
    }

    public function excluir($id_tp_festa){

        $conexao = new Conexao();

        $sql = "delete from tipo_festa where id_tp_festa = $id_tp_festa;";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

    public function carregarPorId($id_tp_festa){
        $conexao = new Conexao();

        $sql = "select * from tipo_festa where id_tp_festa = $id_tp_festa";
        $dados = $conexao->recuperarDados($sql);

        $this->id_tp_festa = $dados[0]['id_tp_festa'];
        $this->nome = $dados[0]['nome'];
    }
    public function alterar($dados){

        $id_tp_festa = $dados['id_tp_festa'];
        $nome = $dados['nome'];

        $conexao = new Conexao();

        $sql = "update tipo_festa set nome = '$nome' where id_tp_festa = $id_tp_festa";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

}