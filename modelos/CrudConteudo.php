    <?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 03/08/18
 * Time: 14:33
 */

    require_once "Conteudo.php";
    require_once "BDConection.php";

class CrudConteudo{

    public function __construct()
{
    $this->conexao = BDConection::getConexao();
}

    public function getConteudos(){

        $sql = "select * from posts order by titulo ";
        $resultado = $this->conexao->query($sql);
        $listaConteudos = [];

        $conteudos = $resultado->fetchAll(PDO::FETCH_ASSOC);
        foreach ($conteudos as $conteudo){
            $objeto = new Conteudo($conteudo['titulo'], '', $conteudo['texto_post'], $conteudo['Cod_post']);
            $listaConteudos[] = $objeto;
        }
        return $listaConteudos;
    }

    public function insertConteudo(Conteudo $conteudo){

        $consulta = "INSERT INTO posts (titulo, texto_post) VALUES ( '{$conteudo->getTitulo()}', '{$conteudo->getTextoPost()}')";
        //echo $consulta;
        try{
            $res = $this->conexao->exec($consulta);
            //return $res;
        }catch (PDOException $erro){
            return $erro->getMessage();
        }

    }

    public function getConteudo($cod_post){

        $sql      = "SELECT * FROM posts WHERE cod_post = $cod_post";
        $resultado = $this->conexao->query($sql);
        $conteudo  = $resultado->fetch(PDO::FETCH_ASSOC);
        $objeto = new Conteudo($conteudo['titulo'], '', $conteudo['texto_post'], $conteudo['Cod_post']);
        return $objeto;
    }

        public function updateConteudo(Conteudo $conteudo){

        $consulta = "UPDATE posts SET titulo = '{$conteudo->getTitulo()}', texto_post = '{$conteudo->getTextoPost()}' WHERE Cod_post={$conteudo->getCodPost()}";
        echo $consulta;
        try{
            $res = $this->conexao->exec($consulta);
            //return $res;
        }catch (PDOException $erro){
            return $erro->getMessage();
        }
    }

    public function deleteConteudo($cod_post){

        $consulta = "DELETE FROM posts WHERE Cod_post = {$cod_post}";
        echo $consulta;
        try{
            $res = $this->conexao->exec($consulta);
            //return $res;
        }catch (PDOException $erro){
            return $erro->getMessage();
        }
    }

}