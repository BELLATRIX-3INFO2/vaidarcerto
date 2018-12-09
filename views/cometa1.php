<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("location: permissao.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bellatrix</title>
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

    <style type="text/css">
        
.thumb-contenido{
    
    margin-bottom:1%;
    margin-left: 0px;
    padding-left: 0px;
}


.verde {

color: #50d8af;;

}


    </style>

</head>
<body>
<!--==========================
  Header
============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="telalogado.php" class="scrollto">Bellatrix</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu"><a href="telalogado.php">Inicio</a></li>
                <li><a href="listaeventos.php">Eventos</a></li>
                <li><a href="#team">Sobre</a></li>
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
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="perfil.css">
<br>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="well"> 
        <div class="row">
             <div class="col-md-12">

                   <!------- IMAGEM A SE COLOCAR ------>
                     
                 <div class="pull-left col-md-4 col-xs-12 thumb-contenido"><img class="center-block img-responsive" src='img/cometa.jpg' /></div>

              


                 <div class="">
                     <h1  class="hidden-xs">O que é um cometa? </h1>
                     <hr>
                    
                     <small class="verde"><strong>Autor desconhecido </strong></small>
                     <hr>
                     <p class="text-justify"> Cometa é um corpo menor do sistema solar que quando se aproxima do Sol passa a exibir uma atmosfera difusa, denominada coma, e em alguns casos apresenta também uma cauda, ambas causadas pelos efeitos da radiação solar e dos ventos solares sobre o núcleo cometário. Os núcleos cometários são compostos de gelo, poeira e pequenos fragmentos rochosos, variando em tamanho de algumas centenas de metros até dezenas de quilômetros.
                    Os cometas possuem uma grande variedade de períodos orbitais diferentes, variando de poucos anos a centenas de milhares de anos, e acredita-se que alguns só passaram uma única vez no Sistema Solar interior antes de serem arremessados no espaço interestelar. Acredita-se que os cometas de período curto tenham sua origem no Cinturão de Kuiper, ou em seu disco de espalhamento, que fica além da órbita de Netuno. <br> </br>
                    Já os cometas de longo período, acredita-se que se originam na Nuvem de Oort, consistindo de restos da condensação da Nebulosa solar, bem além do Cinturão de Kuiper. Os cometas são arremessados dos limites exteriores do Sistema Solar em direção ao Sol pela perturbação gravitacional dos planetas exteriores (no caso dos objetos no Cinturão de Kuiper) ou de estrelas próximas (no caso dos objetos da Nuvem de Oort), ou como resultado da colisão entre objetos nestas regiões[carece de fontes].
                    Os cometas são distintos dos asteroides pela presença de uma coma ou cauda, apesar de cometas muito antigos que perderam todo material volátil podem se assemelhar a asteroides (veja cometas extintos). Acredita-se que uns asteroides tenham uma origem diferente dos cometas, tendo se formado no Sistema Solar interior em vez do Sistema Solar exterior, mas algumas descobertas recentes  tornaram um pouco mais nebulosa a distinção entre asteroides e cometas (veja centauros, damocloides e terminologia de asteroides).
                    Até maio de 2005 foram registrados 3.648 cometas conhecidos dos quais 1.500 são Cometas rasantes Kreutz e cerca de 400 são de período curto. Este número está aumentando. Entretanto, ele representa apenas uma pequena fração da população total potencial de cometas: o número de corpos semelhantes a cometas no sistema solar exterior pode chegar a um trilhão. O número de cometas visíveis a olho nu é, em média, de um cometa por ano, e a maioria deles é discreto e nada espetacular. Quando um cometa historicamente brilhante ou notável é visto a olho nu por muitas pessoas, ele pode ser chamado de Grande Cometa.
					 
                
</p></div>

                 <br>

                 <hr>

                 
                </div>
            </div>
        </div>
    </div>  

<hr>
             </div>
        </div>
    </div>
</div>


</body>
<script>
    $(document).ready(function(){
        $("#alo").click(function(){
            $("#cartao").toggle();

        });
    });

</script>
</html>