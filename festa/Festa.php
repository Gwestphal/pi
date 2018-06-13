<?php

include_once '../Conexao.php';

class Festa
{

    protected $idfesta;
    protected $endereco;
    protected $data;
    protected $horario;
    protected $numeroconvidados;
    protected $cliente_idcliente;
    protected $decoracao_iddecoracao;
    protected $id_tp_festa;
    protected $id_decoracao;
    protected $id_cliente;

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
    public function getIdDecoracao()
    {
        return $this->id_decoracao;
    }

    /**
     * @param mixed $id_decoracao
     */
    public function setIdDecoracao($id_decoracao)
    {
        $this->id_decoracao = $id_decoracao;
    }

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


    public function recuperarDados()
    {
        $conexao = new Conexao();
        $sql = "select * from festa";
        return $conexao->recuperarDados($sql);
    }

    public function inserir($dados)
    {

        $endereco = $dados['endereco'];
        $dia = $dados['dia'];
        $horario = $dados['horario'];
        $numeroconvidados = $dados['numeroconvidados'];
        $cliente_idcliente = $dados['cliente_idcliente'];
        $decoracao_iddecoracao = $dados['decoracao_iddecoracao'];
        $id_tp_festa = $dados['id_tp_festa'];
        $id_decoracao = $dados['id_decoracao'];
        $id_cliente = $dados['id_cliente'];

        $conexao = new Conexao();

        $sql = "insert into festa (endereco, dia, horario, numeroconvidados, cliente_idcliente, decoracao_iddecoracao) values
                ('$endereco', '$dia','$horario','$numeroconvidados','$cliente_idcliente','$decoracao_iddecoracao')
                WHERE id_tp_festa = '$id_tp_festa' AND id_decoracao = '$id_decoracao' AND id_cliente = '$id_cliente'
        ";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

    public function excluir($idfesta)
    {

        $conexao = new Conexao();

        $sql = "delete from festa where idfesta = $idfesta";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }


}