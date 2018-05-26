<?php

include_once '../Conexao.php';

class Festa{

    protected $idfesta;
    protected $endereco;
    protected $data;
    protected $horario;
    protected $numeroconvidados;
    protected $cliente_idcliente;
    protected $decoracao_iddecoracao;

    /**
     * @return mixed
     */
    public function getIdfesta()
    {
        return $this->idfesta;
    }

    /**
     * @param mixed $idfesta
     */
    public function setIdfesta($idfesta)
    {
        $this->idfesta = $idfesta;
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
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * @param mixed $horario
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;
    }

    /**
     * @return mixed
     */
    public function getNumeroconvidados()
    {
        return $this->numeroconvidados;
    }

    /**
     * @param mixed $numeroconvidados
     */
    public function setNumeroconvidados($numeroconvidados)
    {
        $this->numeroconvidados = $numeroconvidados;
    }

    /**
     * @return mixed
     */
    public function getClienteIdcliente()
    {
        return $this->cliente_idcliente;
    }

    /**
     * @param mixed $cliente_idcliente
     */
    public function setClienteIdcliente($cliente_idcliente)
    {
        $this->cliente_idcliente = $cliente_idcliente;
    }

    /**
     * @return mixed
     */
    public function getDecoracaoIddecoracao()
    {
        return $this->decoracao_iddecoracao;
    }

    /**
     * @param mixed $decoracao_iddecoracao
     */
    public function setDecoracaoIddecoracao($decoracao_iddecoracao)
    {
        $this->decoracao_iddecoracao = $decoracao_iddecoracao;
    }



    public function recuperarDados(){
        $conexao = new Conexao();
        $sql = "select * from festa";
        return $conexao->recuperarDados($sql);
    }

    public function inserir($dados){

        $endereco = $dados['endereco'];
        $dia = $dados['dia'];
        $horario = $dados['horario'];
        $numeroconvidados = $dados['numeroconvidados'];
        $cliente_idcliente = $dados['cliente_idcliente'];
        $decoracao_iddecoracao = $dados['decoracao_iddecoracao'];

        $conexao = new Conexao();

        $sql = "insert into festa (endereco, dia, horario, numeroconvidados, cliente_idcliente, decoracao_iddecoracao) values
                ('$endereco', '$dia','$horario','$numeroconvidados','$cliente_idcliente','$decoracao_iddecoracao');";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

    public function excluir($idfesta){

        $conexao = new Conexao();

        $sql = "delete from festa where idfesta = $idfesta;";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }


}