<?php

include_once '../Conexao.php';

class Funcionario
{

    protected $idfuncionarios;
    protected $nome;
    protected $cpf;
    protected $rg;
    protected $telefone;
    protected $celular;
    protected $endereco;
    protected $email;
    protected $sexo;
    protected $uf;
    protected $id_especialidade;

    /**
     * @return mixed
     */
    public function getIdEspecialidade()
    {
        return $this->id_especialidade;
    }

    /**
     * @param mixed $id_especialidade
     */
    public function setIdEspecialidade($id_especialidade)
    {
        $this->id_especialidade = $id_especialidade;
    }

    /**
     * @return mixed
     */
    public function getIdfuncionarios()
    {
        return $this->idfuncionarios;
    }

    /**
     * @param mixed $idfuncionarios
     */
    public function setIdfuncionarios($idfuncionarios)
    {
        $this->idfuncionarios = $idfuncionarios;
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

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * @param mixed $rg
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * @param mixed $celular
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param mixed $uf
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
    }


    public function recuperarDados()
    {
        $conexao = new Conexao();
        $sql = "select * from funcionarios";
        return $conexao->recuperarDados($sql);
    }

    public function inserir($dados)
    {

        $nome = $dados['nome'];
        $cpf = $dados['cpf'];
        $rg = $dados['rg'];
        $telefone = $dados['telefone'];
        $celular = $dados['celular'];
        $endereco = $dados['endereco'];
        $email = $dados['email'];
        $sexo = $dados['sexo'];
        $uf = $dados['uf'];
        $id_especialidade = $dados['id_especialidade'];

        $conexao = new Conexao();

        $sql = "insert into funcionarios (nome, cpf, rg, telefone, celular, endereco, email, sexo, uf, id_especialidade) values
                ('$nome','$cpf','$rg','$telefone','$celular','$endereco','$email', '$sexo','$uf', '$id_especialidade');";

        return $conexao->executar($sql);
    }

    public function excluir($idfuncionarios)
    {

        $conexao = new Conexao();

        $sql = "delete from funcionarios where idfuncionarios = $idfuncionarios;";

        echo $sql; die;
        return $conexao->executar($sql);
    }

    public function carregarPorId($idfuncionarios)
    {
        $conexao = new Conexao();

        $sql = "select * from funcionarios where idfuncionarios = '$idfuncionarios'";

        $dados = $conexao->recuperarDados($sql);

        $this->idfuncionarios = $dados['$idfuncionarios'];
        $this->nome = $dados['$nome'];
        $this->cpf = $dados['$cpf'];
        $this->rg = $dados['$rg'];
        $this->telefone = $dados['$telefone'];
        $this->celular = $dados['$celular'];
        $this->endereco = $dados['$endereco'];
        $this->email = $dados['$email'];
        $this->sexo = $dados['$sexo'];
        $this->uf = $dados['$uf'];
        $this->id_especialidade = $dados['$id_especialidade'];

    }

}