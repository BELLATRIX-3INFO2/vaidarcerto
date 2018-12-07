<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 27/04/18
 * Time: 13:16
 */

class Usuario
{
    private $Nome;
    private $Login_usu;
    private $Senha_usu;
    private $Email;
    private $Id;
    private $tipo;



    public function __construct($nome, $login_usu, $senha_usu, $email, $tipo, $id=null)
    {
        $this->Nome = $nome;
        $this->Login_usu = $login_usu;
        $this->Senha_usu = $senha_usu;
        $this->Email = $email;
        $this->tipo = $tipo;
        $this->Id = $id;

    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->Nome;
    }

    /**
     * @param mixed $Nome
     */
    public function setNome($Nome)
    {
        $this->Nome = $Nome;
    }

    /**
     * @return mixed
     */
    public function getLoginUsu()
    {
        return $this->Login_usu;
    }

    /**
     * @param mixed $Login_usu
     */
    public function setLoginUsu($Login_usu)
    {
        $this->Login_usu = $Login_usu;
    }

    /**
     * @return mixed
     */
    public function getSenhaUsu()
    {
        return $this->Senha_usu;
    }

    /**
     * @param mixed $Senha_usu
     */
    public function setSenhaUsu($Senha_usu)
    {
        $this->Senha_usu = $Senha_usu;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param null $Id
     */
    public function setId($Id)
    {
        $this->Id = $Id;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }




}