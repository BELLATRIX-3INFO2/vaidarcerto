<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Bellatrix</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">
<form class="form-signin" action="../controlador/usuario.php?acao=login" method="post">
    <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Faça seu login</h1>
    <label class="sr-only">Usuário</label>
    <input name="login" type="text" id="inputEmail" class="form-control" placeholder="Login" required autofocus>
    <label for="inputPassword" class="sr-only">Senha</label>
    <input name="senha" type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
    <div class="checkbox mb-3">
        <!--         --><?php
        //          if (isset($_SESSION['id'])){
        //              echo 'Olá '.$_SESSION['nome'];
        //              echo '<a href="usuario.php?acao=logout">Sair</a>';
        //          }else{
        //
        //              echo '<a class="right floated item " style="text-decoration-color: white" href="/controlador/usuario.php?acao=login">Login</a>';
        //              if (isset($_GET['erro']) and $_GET['erro']==1){
        //                  echo ('Usuário ou senha inválidos!');
        //              }
        //          }
        //
        //          ?>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" href="telalogado.php" name="entrar">Logar</button>

</form>
</body>
</html>
