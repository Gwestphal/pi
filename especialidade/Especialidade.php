<?php

include_once '../Conexao.php';

class Especialidade{

    protected  $idespecialidade;
    protected $nome;

    /**
     * @return mixed
     */
    public function getIdespecialidade()
    {
        return $this->idespecialidade;
    }

    /**
     * @param mixed $idespecialidade
     */
    public function setIdespecialidade($idespecialidade)
    {
        $this->idespecialidade = $idespecialidade;
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
        $sql = "select * from especialidade order by nome asc";
        return $conexao->recuperarDados($sql);
    }

    public function inserir($dados){

        $nome = $dados['nome'];

        $conexao = new Conexao();

        $sql = "insert into especialidade (nome) values ('$nome')";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

    public function excluir($idespecialidade){

        $conexao = new Conexao();

        $sql = "delete from especialidade where idespecialidade = $idespecialidade;";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

    public function carregarPorId($idespecialidade){
        $conexao = new Conexao();

        $sql = "select * from especialidade where idespecialidade = $idespecialidade";
        $dados = $conexao->recuperarDados($sql);

        $this->idespecialidade = $dados[0]['idespecialidade'];
        $this->nome = $dados[0]['nome'];
    }
    public function alterar($dados){

        $idespecialidade = $dados['idespecialidade'];
        $nome = $dados['nome'];

        $conexao = new Conexao();

        $sql = "update especialidade set nome = '$nome' where idespecialidade = $idespecialidade";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

}
