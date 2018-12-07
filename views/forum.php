<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="forum.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link href="css/style.css" rel="stylesheet">

    <!-- Website CSS style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="cadastro.css">

    <title>Admin</title>
</head>
<body>

<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="telalogado.php" class="scrollto">Bellatrix</h1>
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
                        <li><a href="#">Cometas</a></li>
                        <li><a href="#">Satélites</a></li>
                        <li><a href="#">Estrelas</a></li>
                        <li><a href="#">Galáxias</a></li>
                    </ul>
                </li>
                <li><a href="index.php">Logout</a></li>
                <li><a href="perfil.php">Perfil</a></li>
                <?php if ($_SESSION['tipo'] == 1): ?>
                    <li><a href="admin.php">Admin</a></li>
                <?php endif; ?>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>

</header><!-- #header -->
<div class="container">
    <div class="row main">
        <div class="panel-heading">
            <div class="panel-title text-center">
                <h1 class="title">notícias</h1>
                <hr id="bar" />
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="well well-sm">
                        <form class="form-horizontal" action="../controlador/conteudo.php?acao=inserir" method="post">
                            <fieldset>
                                <legend class="text-center">Cadastro de notícias</legend>

                                <!-- Title input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="title">Título</label>
                                    <div class="col-md-9">
                                        <input id="title" name="titulo" type="text" placeholder="Escolha um título para a notícia" class="form-control">
                                    </div>
                                </div>



                                <!-- Message body -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="message">Texto</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="message" name="texto_post" placeholder="Por favor escreva seu texto aqui..." rows="5"></textarea>
                                    </div>
                                </div>

                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" name="gravar" class="btn btn-primary btn-lg">Submit</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>




<script type="text/javascript" src="assets/js/bootstrap.js"></script>


</body>
</html>