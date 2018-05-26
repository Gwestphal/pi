<?php

include_once '../Conexao.php';

class Musica
{

    protected $idmusica;
    protected $artista;
    protected $genero;

    /**
     * @return mixed
     */
    public function getIdmusica()
    {
        return $this->idmusica;
    }

    /**
     * @param mixed $idmusica
     */
    public function setIdmusica($idmusica)
    {
        $this->idmusica = $idmusica;
    }

    /**
     * @return mixed
     */
    public function getArtista()
    {
        return $this->artista;
    }

    /**
     * @param mixed $artista
     */
    public function setArtista($artista)
    {
        $this->artista = $artista;
    }

    /**
     * @return mixed
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * @param mixed $genero
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }


    public function recuperarDados()
    {
        $conexao = new Conexao();
        $sql = "select * from musica";
        return $conexao->recuperarDados($sql);
    }

    public function inserir($dados)
    {

        $artista = $dados['artista'];
        $genero = $dados['genero'];

        $conexao = new Conexao();

        $sql = "insert into musica (artista, genero) values
                ('$artista','$genero');";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

    public function excluir($idmusica)
    {

        $conexao = new Conexao();

        $sql = "delete from musica where id_musica = '$idmusica'";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

    public function carregarPorId($idmusica)
    {
        $conexao = new Conexao();

        $sql = "select * from musica where id_musica = '$idmusica'";
        $dados = $conexao->recuperarDados($sql);

        $this->idmusica = $dados[0]['id_musica'];
        $this->artista = $dados[0]['artista'];
        $this->genero = $dados[0]['genero'];
    }

    public function alterar($dados)
    {

        $idmusica = $dados['id_musica'];
        $artista = $dados['artista'];
        $genero = $dados['genero'];

        $conexao = new Conexao();

        $sql = "update musica set artista ='$artista', genero='$genero' where id_musica = '$idmusica'";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

}