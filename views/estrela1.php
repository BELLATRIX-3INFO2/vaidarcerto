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
                     
                 <div class="pull-left col-md-4 col-xs-12 thumb-contenido"><img class="center-block img-responsive" src='img/estrela.jpg' /></div>

              


                 <div class="">
                     <h1  class="hidden-xs">O que é uma estrela?</h1>
                     <hr>
                    
                     <small class="verde"><strong>Autor desconhecido </strong></small>
                     <hr>
                     <p class="text-justify">Uma estrela é uma grande e luminosa esfera de plasma, mantida íntegra pela gravidade e pela pressão de radiação. Ao fim de sua vida, uma estrela pode conter também uma proporção de matéria degenerada. Observações sugerem que a formação de estrelas começou em torno de 180 milhões a 250 milhõ de anos após o Big Bang.

A estrela mais próxima da Terra é o Sol, que é a fonte da maior parte da energia do planeta. Outras estrelas são visíveis da Terra durante a noite, quando não são ofuscadas pela luz do Sol ou bloqueadas por fenômenos atmosféricos. Historicamente, as estrelas mais importantes da esfera celeste foram agrupadas em constelações e asterismos, e as estrelas mais brilhantes ganharam nomes próprios. Extensos catálogos de estrelas foram compostos pelos astrônomos, o que permite a existência de designações padronizadas.

Pelo menos durante uma parte da sua vida, uma estrela brilha devido à fusão nuclear do hidrogênio no seu núcleo, liberando energia que atravessa o interior da estrela e irradia para o espaço sideral. Quase todos os elementos que ocorrem na natureza mais pesados que o hélio foram criados por estrelas, seja pela nucleossíntese estelar durante as suas vidas ou pela nucleossíntese de supernova quando as estrelas explodem. Os astrônomos podem determinar a massa, idade, composição química e muitas outras propriedades de uma estrela observando o seu espectro, luminosidade e movimento no espaço. A massa total de uma estrela é o principal determinante da sua evolução e possível destino. Outras características de uma estrela são determinadas pela história da sua evolução, inclusive o diâmetro, rotação, movimento e temperatura. Um diagrama da temperatura de muitas estrelas contra suas luminosidades, conhecido como Diagrama de Hertzsprung-Russell (Diagrama H-R), permite determinar a idade e o estado evolucionário de uma estrela.
<br> </br>
Uma estrela se forma pelo colapso de uma nuvem de material composta principalmente de hidrogênio e traços de elementos mais pesados. Uma vez que o núcleo estelar seja suficientemente denso, parte do hidrogênio é gradativamente convertido em hélio pelo processo de fusão nuclear. O restante do interior da estrela transporta a energia a partir do núcleo por uma combinação de processos radiantes e convectivos. A pressão interna da estrela impede que ela colapse devido a sua própria gravidade. Quando o combustível do núcleo (hidrogênio) se exaure, as estrelas que possuem pelo menos 40% da massa do Sol se expandem para se tornarem gigantes vermelhas, em alguns casos fundindo elementos mais pesados no núcleo ou em camadas em torno do núcleo. A estrela então evolui para uma forma degenerada, reciclando parte do material para o ambiente interestelar, onde será formada uma nova geração de estrelas com uma maior proporção de elementos pesados.

Sistemas binários e multiestelares consistem de duas ou mais estrelas que estão gravitacionalmente ligadas, movendo-se umas em torno das outras em órbitas estáveis. Quando duas dessas estrelas estão em órbitas relativamente próximas, sua interação gravitacional pode causar um impacto significativo na sua evolução. As estrelas podem ser parte de uma estrutura de relacionamento gravitacional muito maior, como um aglomerado ou uma galáxia.
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