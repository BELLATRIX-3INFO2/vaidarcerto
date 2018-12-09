<?php
    require_once '../modelos/CrudUsuarios.php';
    session_start();

    $user = new CrudUsuarios();
    $user = $user->getUsuario($_SESSION['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Reveal Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Jquery -->
    <script href="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>
<!--==========================
  Header
  ============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="index.php" class="scrollto">Bellatrix</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu"><a href="telalogado.php">Inicio</a></li>
                <li><a href="listaeventos.php">Eventos</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li class="menu-has-children"><a href="">Categorias</a>
                    <ul>
                        <li><a href="cometa.php">Cometas</a></li>
                        <li><a href="satelite.php">Satélites</a></li>
                        <li><a href="estrela.php">Estrelas</a></li>
                        <li><a href="galaxia.php">Galáxias</a></li>
                        <li><a href="nebulosa.php">Nebulosas</a></li>
                        <li><a href="historia.php">História</a></li>
                        <li><a href="planetas.php">Planetas</a></li>
                        <li><a href="sistema.php">Sistema Solar</a></li>
                    </ul>
                </li>
                <li><a href="../controlador/usuario.php?acao=logout">Logout</a></li>
                <li><a href="perfil.php">Perfil</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>

</header><!-- #header -->
<section id="services">
    <div class="container">
        <div class="section-header">
            <h3>editar informações
</h3>


            <form  method="post" action="../controlador/usuario.php?acao=editar">
  <div class="form-group">
    <label for="Nome">Nome</label>
    <input  class="form-control" id="inputnome" name="Nome" placeholder="Digite seu nome" value="<?= $user->getNome() ?>">

  </div>

  <div class="form-group">
    <label for="Email">Endereço de email</label>
    <input type="email" class="form-control" id="inputemail" name="Email" placeholder="Digite seu email" value="<?= $user->getEmail() ?>">
  </div>

  <div class="form-group">
    <label for="Login_usu">Nome de usuário</label>
    <input type="login" class="form-control" id="inputlogin" name="Login_usu" placeholder="Escolha um nome de usuário" value="<?= $user->getLoginUsu() ?>">

  </div>

  <div class="form-group">
    <label for="Senha_usu">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="Senha_usu" placeholder="Escolha uma senha" value="<?= $user->getSenhaUsu() ?>">
  </div>
  <br>
  <input type="submit" class="btn btn-outline-success" value="Editar" href="perfil.php">
</form>

        </div>

</div>
</section>


</body>
<script>
    $(document).ready(function(){
        $("#alo").click(function(){
            $("#cartao").toggle();

        });
    });

</script>
</html>