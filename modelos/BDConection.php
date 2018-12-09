<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 27/04/18
 * Time: 13:22
 */

class BDConection
{
    const HOST      = "localhost";
    const NOMEBANCO = "bd_bellatrix";
    const USUARIO   = "root";
    const SENHA     = "";

    public static function getConexao(){
        $conexao = new PDO("mysql:host=".self::HOST.";dbname=".self::NOMEBANCO, self::USUARIO, self::SENHA);

        return $conexao;
    }

}