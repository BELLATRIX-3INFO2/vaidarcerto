<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 03/08/18
 * Time: 14:30
 */

class Conteudo
{
    private $Cod_post;
    private $titulo;
    private $descricao;
    private $texto_post;

    public function __construct($titulo,$descricao,$texto_post, $Cod_post=null)
    {
        $this->Cod_post = $Cod_post;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->texto_post = $texto_post;

    }

    /**
     * @return null
     */
    public function getCodPost()
    {
        return $this->Cod_post;
    }

    /**
     * @param null $Cod_post
     */
    public function setCodPost($Cod_post)
    {
        $this->Cod_post = $Cod_post;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getTextoPost()
    {
        return $this->texto_post;
    }

    /**
     * @param mixed $texto_post
     */
    public function setTextoPost($texto_post)
    {
        $this->texto_post = $texto_post;
    }



}