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

        <title>Admin</title>
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

          <li><a href="login.php">Login</a></li>
          <li><a href="cadastro.php">Cadastrar-se</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>

  </header><!-- #header -->
        <div class="container">
            <div class="row main">
                <div class="panel-heading">
                   <div class="panel-title text-center">
                        <h1 class="title">Cadastro</h1>
                        <hr />
                    </div>
                </div> 
                <div class="main-login main-center">
                    <form class="form-horizontal" method="post" action="../controlador/usuario.php?acao=inserir">
                        
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Nome</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="Nome" id="name"  placeholder="Insira seu nome"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Usuário</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="Login_usu" id="username"  placeholder="Insira seu nome de usuário"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Senha</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="Senha_usu" id="password"  placeholder="Insira sua senha"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="Email" id="email"  placeholder="Insira seu Email"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <input name="gravar" type="submit" href="../controlador/usuario.php" class="btn btn-primary btn-lg btn-block login-button"></input>
                        </div>
                        <div class="login-register">
                            <a class="cancell" href="index.php">Cancelar </a>
                         </div>
                    </form>
                </div>
            </div>
        </div>




        <script type="text/javascript" src="assets/js/bootstrap.js"></script>

        
    </body>
</html>