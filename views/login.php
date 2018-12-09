
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <title>Bellatrix</title>
</head>
<body>

<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="index.php" class="scrollto">Bellatrix</h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu"><a href="index.php">Inicio</a></li>
                <li><a href="listaeventos.php">Eventos</a></li>
                <li><a href="sobre2.php">Sobre</a></li>
                <li class="menu-has-children"><a href="">Categorias</a>
                    <ul>
                        <li><a href="login.php">Cometas</a></li>
                        <li><a href="login.php">Satélites</a></li>
                        <li><a href="login.php">Estrelas</a></li>
                        <li><a href="login.php">Galáxias</a></li>
                        <li><a href="login.php">Nebulosas</a></li>
                        <li><a href="login.php">História</a></li>
                        <li><a href="login.php">Planetas</a></li>
                        <li><a href="login.php">Sistema Solar</a></li>
                    </ul>
                </li>
                <li><a href="cadastro.php">Cadastrar-se</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>

</header><!-- #header -->
<div class="container">
    <div class="row main">
        <div class="panel-heading">
            <div class="panel-title text-center">
                <h2 class="title">Login</h2>
                <hr />
            </div>
        </div>
        <div class="main-login main-center">
            <form class="form-signin" action="../controlador/usuario.php?acao=login" method="post">

                <div class="form-group">
                    <label for="username" class="cols-sm-2 control-label">Login</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="login" placeholder="Insira seu login"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Senha</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="senha" placeholder="Insira sua senha"/>
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <input id="button" class="btn btn-lg btn-primary btn-block"  value="Login" type="submit" href="index.php" name="entrar">
                </div>
                <div class="login-register">
                    <a class="cancell" href="index.php" style="color:blue">Cancelar </a>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="assets/js/bootstrap.js"></script>

</body>
</html>