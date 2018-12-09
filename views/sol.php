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
                     
                 <div class="pull-left col-md-4 col-xs-12 thumb-contenido"><img class="center-block img-responsive" src='img/sol.jpg' /></div>

              


                 <div class="">
                     <h1  class="hidden-xs">Sol</h1>
                     <hr>
                    
                     <small class="verde"><strong>Autor desconhecido </strong></small>
                     <hr>
                     <p class="text-justify">O Sol (do latim sol, solis) é a estrela central do Sistema Solar. Todos os outros corpos do Sistema Solar, como planetas, planetas anões, asteroides, cometas e poeira, bem como todos os satélites associados a estes corpos, giram ao seu redor. Responsável por 99,86% da massa do Sistema Solar, o Sol possui uma massa 332 900 vezes maior que a da Terra, e um volume 1 300 000 vezes maior que o do nosso planeta. A distância da Terra ao Sol é cerca de 150 milhões de quilômetros ou 1 unidade astronômica (UA). Esta distância varia com o ano de um mínimo de 147,1 milhões de quilômetros (0,9833 UA) no perélio (ou periélio) a um máximo de 152,1 milhões de quilômetros (1,017 UA) no afélio, em torno de 4 de julho. <br> </br>
                    A luz solar demora aproximadamente 8 minutos e 18 segundos para chegar à Terra. Energia do Sol na forma de luz solar é armazenada em glicose por organismos vivos através da fotossíntese, processo do qual, direta ou indiretamente, dependem todos os seres vivos que habitam nosso planeta. A energia solar também é responsável pelos fenômenos meteorológicos e o clima na Terra. 
                    É composto primariamente de hidrogênio (74% de sua massa, ou 92% de seu volume) e hélio (24% da massa solar, 7% do volume solar), com traços de outros elementos, incluindo ferro, níquel, oxigênio, silício, enxofre, magnésio, néon, cálcio e crômio.[17] Possui a classe espectral de G2V: G2 indica que a estrela possui uma temperatura de superfície de aproximadamente 5 780 K, o que lhe confere uma cor branca (apesar de ser visto como amarelo no céu terrestre, o que se deve à dispersão dos raios na atmosfera); O V (5 em números romanos) na classe espectral indica que o Sol, como a maioria das estrelas, faz parte da sequência principal. Isto significa que o astro gera sua energia através da fusão de núcleos de hidrogênio para a formação de hélio. Existem mais de 100 milhões de estrelas da classe G2 na Via Láctea. Considerado anteriormente uma estrela pequena, acredita-se atualmente que o Sol seja mais brilhante do que 85% das estrelas da Via Láctea, sendo a maioria dessas anãs vermelhas.  <br> </br>
                    O espectro do Sol contém linhas espectrais de metais ionizados e neutros, bem como linhas de hidrogênio muito fracas. A coroa solar expande-se continuamente no espaço, criando o vento solar, uma corrente de partículas carregadas que estende-se até a heliopausa, a cerca de 100 UA do Sol. A bolha no meio interestelar formada pelo vento solar, a heliosfera, é a maior estrutura contínua do Sistema Solar.  <br> </br>
                    O Sol orbita em torno do centro da Via Láctea, atravessando no momento a Nuvem Interestelar Local de gás de alta temperatura, no interior do Braço de Órion da Via Láctea, entre os braços maiores Perseus e Sagitário. Das 50 estrelas mais próximas do Sistema Solar, num raio de até 17 anos-luz da Terra, o Sol é a quarta maior em massa. Diferentes valores de magnitude absoluta foram dados para o Sol, como, por exemplo, 4,85, e 4,81. O Sol orbita o centro da Via Láctea a uma distância de cerca de 24 a 26 mil anos-luz do centro galáctico, movendo-se geralmente na direção de Cygnus e completando uma órbita entre 225 a 250 milhões de anos (um ano galáctico). A estimativa mais recente e precisa da velocidade orbital do sol é da ordem de 251 km/s. Visto que a Via Láctea move-se na direção da constelação Hidra, com uma velocidade de 550 km/s, a velocidade do Sol relativa à radiação cósmica de fundo em micro-ondas é de 370 km/s, na direção da constelação da Taça.
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