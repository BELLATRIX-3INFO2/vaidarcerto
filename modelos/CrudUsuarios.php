<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 27/04/18
 * Time: 13:23
 */

require_once "Usuario.php";
require_once "BDConection.php";

class CrudUsuarios
{
    public function __construct()
    {
        $this->conexao = BDConection::getConexao();
    }

    public function getUsuarios(){

        $sql = "select * from usuario order by Nome ";
        $resultado = $this->conexao->query($sql);
        $listaUsuarios = [];

        $usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);
        foreach ($usuarios as $usuario){
            $objeto = new Usuario($usuario['Nome'], $usuario['Login_usu'], $usuario['Senha_usu'],$usuario['Email'], $usuario['Id']);
            $listaUsuarios[] = $objeto;
        }
        return $listaUsuarios;
    }

    public function insertUsuario(Usuario $usuario){

        $consulta = "INSERT INTO usuario (Nome,Login_usu, Senha_usu, Email, tipo) VALUES ( '{$usuario->getNome()}', '{$usuario->getLoginUsu()}', '{$usuario->getSenhaUsu()}', '{$usuario->getEmail()}', 0);";

        echo $consulta;
        try{
            $res = $this->conexao->exec($consulta);
            //return $res;
            echo $res;
        }catch (PDOException $erro){
            return $erro->getMessage();
        }

    }

    public function getUsuario($id){

        $sql      = "SELECT * FROM usuario WHERE Id = $id";
        $resultado = $this->conexao->query($sql);
        $usuario  = $resultado->fetch(PDO::FETCH_ASSOC);
        $objeto = new Usuario($usuario['Nome'], $usuario['Login_usu'], $usuario['Senha_usu'],$usuario['Email'],$usuario['tipo'], $usuario['Id']);
        $objeto->setTipo($usuario['tipo']);
        return $objeto;
    }

    public function updateUsuario(Usuario $usuario){

        $consulta = "UPDATE usuario SET Nome = '{$usuario->getNome()}', Login_usu = '{$usuario->getLoginUsu()}',  Senha_usu = '{$usuario->getSenhaUsu()}', Email = '{$usuario->getEmail()
        }' WHERE Id = {$usuario->getId()};";
        echo $consulta;
        try{
            $res = $this->conexao->exec($consulta);
            //return $res;
        }catch (PDOException $erro){
            return $erro->getMessage();
        }
    }

    public function deleteUsuario($id){

        $consulta = "DELETE FROM usuario WHERE Id = {$id}";
        echo $consulta;
        try{
            $res = $this->conexao->exec($consulta);
            //return $res;
        }catch (PDOException $erro){
            return $erro->getMessage();
        }
    }

    public function login($login, $senha){
        $sql      = "SELECT * FROM usuario WHERE Login_usu = '$login' and Senha_usu='$senha' ";
        $resultado = $this->conexao->query($sql);
        if($resultado->rowCount() > 0) {
            $usuario = $resultado->fetch(PDO::FETCH_ASSOC);
            $objeto = new Usuario($usuario['Nome'], $usuario['Login_usu'], $usuario['Senha_usu'], $usuario['Email'],$usuario['tipo'], $usuario['Id']);
            return $objeto;
        }else{
            return false;
        }

    }

}