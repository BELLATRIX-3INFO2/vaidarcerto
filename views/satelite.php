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
                <li><a href="index.php">Logout</a></li>
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
                 <div class="row hidden-md hidden-lg"><h1 class="text-center" ></div>

                   <!------- IMAGEM A SE COLOCAR ------>
                     
                 <div class="pull-left col-md-4 col-xs-12 thumb-contenido"><img class="center-block img-responsive" src='img/satelite.jpg' /></div>

              


                 <div class="">
                     <h1  class="hidden-xs">O que são Satélites?</h1>
                     <hr>
                    
                     <small class="verde"><strong>Autor desconhecido </strong></small>
                     <hr>
                     <p class="text-justify">Um satélite natural é um corpo celeste que orbita um planeta ou outro corpo maior. Dessa forma, o termo satélite natural poderia se referir a planetas anões orbitando a uma estrela, ou até uma galáxia anã orbitando uma galáxia maior. Porém, ele é normalmente um sinônimo de lua, usado para identificar satélites não artificiais de planetas, planetas anões ou corpos menores. Por exemplo, a Lua é o satélite natural da Terra.
                    Em setembro de 2011, havia 375 objetos no Sistema Solar classificados como luas. Dentre esses, 169 orbitam planetas e 206 orbitam planetas anões e corpos menores. <br> </br>
                    Porém, alguns são maiores que alguns planetas principais, como Ganímedes e Titã, satélites de Júpiter e Saturno, respectivamente, que são maiores que Mercúrio. Assim sendo estes satélites, se não orbitassem planetas, seriam eles mesmos planetas. Apesar disso, existem outros satélites que são muito menores e têm menos de 5 km de diâmetro, como vários satélites do planeta Júpiter.
                    Caronte, o satélite natural de Plutão tem mais ou menos metade do diâmetro deste último, e visto que o primeiro não gira exatamente em torno do segundo (visto que o baricentrodo sistema plutoniano localiza-se acima da superfície plutoniana), o que leva certos astrônomos a pensarem no conjunto como um planeta duplo. De facto, o próprio sistema Terra-Lua (embora o baricentro do sistema esteja dentro da Terra, e a Lua tenha menos de um quarto o diâmetro terrestre) é, também considerado por alguns astrônomos como um planeta duplo. 
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