<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("location: permissao.php");
}
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>Bellatrix</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="css/calendario.css" rel="stylesheet">
    <script src="js/calendario.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/calendario.css">

    <!------ Include the above in your HEAD tag ---------->


    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">



</head>

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
                        <li><a href="cometaHalley.php">Cometas</a></li>
                        <li><a href="satelite.php">Satélites</a></li>
                        <li><a href="sol.php">Estrelas</a></li>
                        <li><a href="galaxiaAndro.php">Galáxias</a></li>
                        <li><a href="nebulosa.php">Nebulosas</a></li>
                        <li><a href="historia.php">História</a></li>
                        <li><a href="planetaTerra.php">Planetas</a></li>
                        <li><a href="sistema.php">Sistema Solar</a></li>
                    </ul>
                </li>
                <li><a href="../controlador/usuario.php?acao=logout">Logout</a></li>
                <li><a href="perfil.php">Perfil</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>

</header><!-- #header -->
<body>

<br>
<div class="container">
    <div class="row">

        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="pull-left" style="margin-top: 20px;">
                            <h3>Eventos</h3>
                        </div>
                        <div class="pull-right">

                            <div class="btn-group">
                                <button type="button" class="btn btn-success btn-filter" data-target="pagado">Em breve</button>
                                <button type="button" class="btn btn-warning btn-filter" data-target="pendiente">Acontecendo</button>
                                <button type="button" class="btn btn-danger btn-filter" data-target="cancelado">Já foi</button>
                                <button type="button" class="btn btn-default btn-filter" data-target="all">Todos</button>
                            </div>
                        </div>
                        <div class="table-container">
                            <table class="table table-filter">
                                <tbody>
                                <tr data-status="pagado">
                                    <td>

                                    </td>
                                    <td>
                                        <a href="javascript:;" class="star">
                                        </a>
                                    </td>
                                    <td>
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="" class="media-photo">
                                            </a>
                                            <div class="media-body">
                                                <span class="media-meta pull-right">30/01/2019</span>
                                                <h4 class="title">
                                                    Excursão pra marte
                                                    <span class="pull-right pagado">(Em breve)</span>
                                                </h4>
                                                <p class="summary">Excursão saindo de Joinville, passando por Florianópolis, parando em Curitiba, seguindo para o Rio de Janeiro com destino final em Marte!</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-status="pendiente">
                                    <td>
                                        <div class="ckbox">

                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript:;" class="star">
                                        </a>
                                    </td>
                                    <td>
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="" class="media-photo">
                                            </a>
                                            <div class="media-body">
                                                <span class="media-meta pull-right">28/11/2018</span>
                                                <h4 class="title">
                                                    Asteróide Banca Final se aproxima do IFC-Campus Araquari
                                                    <span class="pull-right pendiente">(Acontecendo)</span>
                                                </h4>
                                                <p class="summary">Acontece hoje a chegada do asteróide Banca Final, para a equipe de astronautas 3info2. A central de comando Bellatrix está acompnhando sua chegada.</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-status="cancelado">
                                    <td>

                                    </td>
                                    <td>
                                        <a href="javascript:;" class="star">

                                        </a>
                                    </td>
                                    <td>
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="" class="media-photo">
                                            </a>
                                            <div class="media-body">
                                                <span class="media-meta pull-right">18/03/2018</span>
                                                <h4 class="title">
                                                    Eclipse Lunar
                                                    <span class="pull-right cancelado">(Já foi)</span>
                                                </h4>
                                                <p class="summary">O eclipse lunar é hoje! Chama os amigos, a família e até o cachorro. Bora assistir essa belezura!</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-status="pagado" class="selected">
                                    <td>

                                    </td>
                                    <td>
                                        <a href="javascript:;" class="star star-checked">
                                        </a>
                                    </td>
                                    <td>
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="" class="media-photo">
                                            </a>
                                            <div class="media-body">
                                                <span class="media-meta pull-right">02/01/2019</span>
                                                <h4 class="title">
                                                    O encontro de Vênus com a Lua
                                                    <span class="pull-right pagado">(Em breve)</span>
                                                </h4>
                                                <p class="summary">Como um par romântico, Vênus e a Lua irão se alinhar!</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-status="pendiente">
                                    <td>

                                    </td>
                                    <td>
                                        <a href="javascript:;" class="star">
                                        </a>
                                    </td>
                                    <td>
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="" class="media-photo">
                                            </a>
                                            <div class="media-body">
                                                <span class="media-meta pull-right">28/11/2018</span>
                                                <h4 class="title">
                                                    Chuva de meteoritos Ursídeas
                                                    <span class="pull-right pendiente">(Acontecendo)</span>
                                                </h4>
                                                <p class="summary">A chuva está acontecendo! Os meteoros que formam a chuva vem das constelações Ursa maior e Ursa menor, infelizmente elas não acostumam aparecer no Brasil. Mas,você já ouviu falar sobre essas constelações? </p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </section>

    </div>



</body>
</html>