<?php

include_once '../Conexao.php';

class Cliente
{

    protected $id_cliente;
    protected $nome;
    protected $cpf;
    protected $rg;
    protected $sexo;
    protected $email;
    protected $telefone;
    protected $celular;
    protected $endereco;
    protected $cep;
    protected $uf;

    /**
     * @return mixed
     */
    public function getIdCliente()
    {
        return $this->id_cliente;
    }

    /**
     * @param mixed $id_cliente
     */
    public function setIdCliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
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
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
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

        $sql = "select * from cliente";
        return $conexao->recuperarDados($sql);
    }

    public function inserir($dados)
    {

        $nome = $dados['nome'];
        $cpf = $dados['cpf'];
        $rg = $dados['rg'];
        $sexo = $dados['sexo'];
        $email = $dados['email'];
        $telefone = $dados['telefone'];
        $celular = $dados['celular'];
        $endereco = $dados['endereco'];
        $cep = $dados['cep'];
        $uf = $dados['uf'];

        $conexao = new Conexao();

        $sql = "insert into cliente (nome, cpf, rg, sexo, email, telefone, celular, endereco, cep, uf) values
                ('$nome', '$cpf', '$rg', '$sexo', '$email', '$telefone', '$celular', '$endereco', '$cep', '$uf');";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

    public function excluir($id_cliente)
    {

        $conexao = new Conexao();

        $sql = "delete from cliente where id_cliente = $id_cliente;";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }


    public function carregarPorId($id_cliente)
    {
        $conexao = new Conexao();

        $sql = "select * from cliente where id_cliente = $id_cliente";
        $dados = $conexao->recuperarDados($sql);

        $this->id_cliente = $dados[0]['id_cliente'];
        $this->nome = $dados[0]['nome'];
        $this->cpf = $dados[0]['cpf'];
        $this->rg = $dados[0]['rg'];
        $this->sexo = $dados[0]['sexo'];
        $this->email = $dados[0]['email'];
        $this->telefone = $dados[0]['telefone'];
        $this->celular = $dados[0]['celular'];
        $this->endereco = $dados[0]['endereco'];
        $this->cep = $dados[0]['cep'];
        $this->uf = $dados[0]['uf'];
    }

    public function alterar($dados)
    {

        $id_cliente = $dados['id_cliente'];
        $nome = $dados['nome'];
        $cpf = $dados['cpf'];
        $rg = $dados['rg'];
        $sexo = $dados['sexo'];
        $email = $dados['email'];
        $telefone = $dados['telefone'];
        $celular = $dados['celular'];
        $endereco = $dados['endereco'];
        $cep = $dados['cep'];
        $uf = $dados['uf'];

        $conexao = new Conexao();

        $sql = "update cliente set nome='$nome', cpf='$cpf', rg='$rg', sexo='$sexo', email='$email', telefone='$telefone',
        celular='$celular', endereco='$endereco', cep='$cep', uf='$uf'  where id_cliente = '$id_cliente'";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

}