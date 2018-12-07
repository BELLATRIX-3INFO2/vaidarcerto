<?php
    session_start();
    require_once '../modelos/CrudConteudo.php';

    if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
        }else{
    $acao = 'index';
    }
    switch ($acao){

        case 'index':

        $crud = new CrudConteudo();
        $conteudos = $crud->getConteudos();

//        include '../views/usuarios/index.php';

        break;

        case 'inserir';
        if (!isset($_POST['gravar'])){ // se ainda nao tiver preenchido o form
//            include '../views/posts/telaCadastrar.html';

        }else{

            // depois de preencher o formulario

            $titulo = $_POST['titulo'];
            $texto_post= $_POST['texto_post'];
            $novoConteudo = new Conteudo($titulo, '', $texto_post);

            $crud = new CrudConteudo();
            $crud->insertConteudo($novoConteudo);

            header('Location: ../views/admin.php');
        }

        break;

        case 'editar':

            $titulo = $_POST['titulo'];
            $id = $_GET['id'];
            $texto_post= $_POST['texto_post'];

            $novoConteudo = new Conteudo($titulo, '', $texto_post, $id);

            $crud = new CrudConteudo();
            $atualizar = $crud->updateConteudo($novoConteudo);

            header('Location: ../views/admin.php');

            break;

        case 'excluir':
            $crud = new CrudConteudo();
            $apagar = $crud->deleteConteudo($_GET['id']);

            header('Location: ../views/admin.php');
        break;

}
//        FAZER O DELETE E O UPDATE DESSE E DO USUARIO.PHP; FAZER A TELA DE CADASTRO PARA O CONTEUDO E VALIDAÇÃO DE ELE PODER FAZER O CADASTRO PARA O CONTEUDO
