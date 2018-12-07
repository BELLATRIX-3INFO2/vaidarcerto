<?php
    session_start();
?>

<html>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <meta charset="utf-8">
    <title>Bellatrix</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
    <link rel="stylesheet" href="css/perfil_usuario.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/perfil_usuario.js"></script>
</head>

<body class="profile-page" >
<nav class="navbar fixed-top  navbar-expand-lg "  id="sectionsNav">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1>Bellatrix</h1>
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
</nav>

<div class="page-header header-filter" data-parallax="true" style="background-image:url('img/fundoinicial.gif');"></div>
<div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="profile">
                        <div class="avatar">
                            <img src="https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cg_face%2Cq_auto:good%2Cw_300/MTU0NjQzOTk4OTQ4OTkyMzQy/ansel-elgort-poses-for-a-portrait-during-the-baby-driver-premiere-2017-sxsw-conference-and-festivals-on-march-11-2017-in-austin-texas-photo-by-matt-winkelmeyer_getty-imagesfor-sxsw-square.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                        </div>
                        <div class="name">
                            <h3 class="title"><?=$_SESSION["login"] . "<br />" . $_SESSION["email"];?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="profile-tabs">
                        <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="editar_perfil.php">

                                    Editar
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../controlador/usuario.php?acao=excluir" role="tab" >

                                    Excluir
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php" role="tab" >

                                    Sair
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-content tab-space">
                <div class="tab-pane active text-center gallery" id="studio">
                    <div class="row">

                    </div>
                </div>
                <div class="tab-pane text-center gallery" id="works">

                </div>
                <div class="tab-pane text-center gallery" id="favorite">
                    <div class="row">

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<footer class="page-footer font-small teal pt-4" style="background-color:floralwhite; font-family: sans-serif; color: black;">

    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

                <!-- Content -->
                <h5 class="text-uppercase font-weight-bold" style="color: lightseagreen;">Objetivo do Projeto</h5>
                <p>O objetivo desse projeto é trazer de forma dinâmica o conteúdo de astronomia para que não se torne algo monótono. Notíciais sempre atualizadas também estão na lista de como deixar o site atrativo. </p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-6 mb-md-0 mb-3">

                <!-- Content -->
                <h5 class="text-uppercase font-weight-bold" style="color:lightseagreen">Por que Bellatrix?</h5>
                <p>Bellatrix é a terceira estrela mais brilhante da constelação de Orion e a vigésima sétima mais brilhante do céu noturno. A escolha desse nome deu-se porque o grupo gosta muito da cor azul e também porque uma estrela é algo fenomenal.</p>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Text -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">Instituto Federal Catarinense - Campus Araquari.
    </div>
    <!-- Copyright -->

</footer>

<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

</body>


</html></html>