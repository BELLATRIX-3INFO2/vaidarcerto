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
                     
                 <div class="pull-left col-md-4 col-xs-12 thumb-contenido">
                    <img class="center-block img-responsive" src='img/sistema.jpg' /></div>

              


                 <div class="">
                     <h1  class="hidden-xs">Sistema Solar </h1>
                     <hr>
                    
                     <small class="verde"><strong>Autor desconhecido </strong></small>
                     <hr>
                     <p class="text-justify"> O Sistema Solar compreende o conjunto constituído pelo Sol e todos os corpos celestes que estão sob seu domínio gravitacional. A estrela central, maior componente do sistema, respondendo por mais de 99,85% da massa total, gera sua energia através da fusão de hidrogênio em hélio, dois de seus principais constituintes. Os quatro planetas mais próximos do Sol (Mercúrio, Vênus, Terra e Marte) possuem em comum uma crosta sólida e rochosa, razão pela qual se classificam no grupo dos planetas telúricos, ou rochosos. Mais afastados, os quatro gigantes gasosos, Júpiter, Saturno, Urano e Netuno, são os componentes de maior massa do sistema logo após o próprio Sol. Dos cinco planetas anões, Ceres é o que se localiza mais próximo do centro do Sistema Solar, enquanto todos os outros, Plutão, Haumea, Makemake e Éris, se encontram além da órbita de Netuno.
                    Permeando praticamente toda a extensão do Sistema Solar, existem incontáveis objetos que constituem a classe dos corpos menores. Os asteroides, essencialmente rochosos, concentram-se numa faixa entre as órbitas de Marte e Júpiter que se assemelha a um cinturão. Além da órbita do último planeta, a temperatura é suficientemente baixa para permitir a existência de fragmentos de gelo, que se aglomeram sobretudo nas regiões do Cinturão de Kuiper, Disco disperso e na Nuvem de Oort; esporadicamente são desviados para o interior do sistema onde, pela ação do calor do Sol, se transformam em cometas. Muitos corpos, por sua vez, possuem força gravitacional suficiente para manter orbitando em torno de si objetos menores, os satélites naturais, com as mais variadas formas e dimensões. Os planetas gigantes apresentam, ainda, sistemas de anéis planetários, uma faixa composta por minúsculas partículas de gelo e poeira. <br> </br>
                    O Sistema Solar, de acordo com a teoria mais aceita hoje em dia, teve origem a partir de uma nuvem molecular que, por alguma perturbação gravitacional, entrou em colapso e formou a estrela central, enquanto seus remanescentes geraram os demais corpos. Em sua configuração atual, todos os componentes descrevem órbitas praticamente elípticas ao redor do Sol, constituindo um sistema dinâmico onde os corpos estão em mútua interação mediada sobretudo pela força gravitacional. A sua estrutura tem sido objeto de estudos desde a antiguidade, mas somente há cinco séculos a humanidade reconheceu o fato de que o Sol, e não a Terra, constitui o centro do movimento planetário. Desde então, a evolução dos equipamentos de pesquisa, como telescópios, possibilitou uma maior compreensão do sistema. Entretanto, detalhes sem precedentes foram obtidos somente após o envio de sondas espaciais a todos os planetas, que retornam imagens e dados com uma precisão nunca antes alcançada.
					 
                
</p></div>

                 <br>

                 <hr>

                 <strong class="verde"> Insira um comentário </strong>

                 <br>
                 <br>

                      <div class="col-md-20">
           
           
                    <div class="container-fluid well span8">
    
           
           
            <div class="panel panel-default">
                <div class="panel-body">                
                    <form accept-charset="UTF-8" action="" method="POST">
                        <textarea class="form-control counted" name="message" placeholder="Digite uma mensagem" rows="5" style="margin-bottom:10px;"></textarea>
                    
                        <button class="btn btn-info" type="submit">Comentar</button>
                    </form>
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