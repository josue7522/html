<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="icon" href="/img/logo.png">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="container">
    <nav class="retangulo ">
        <img class="logo nav_bar1" src="img/logo.png" alt="">
        <a class="text text_style" href="index.php">HOME</a>
        <a class="text text_style" href="">PRODUTOS</a>
        <a class="text text_style" href="">SERVIÇOS</a>
        <a href="login.php" class="conta text_style">Conta</a>
        <img src="img/usuario-de-perfil.png" class="perfil" alt="">
    </nav>
    <footer class="rodape ">
        <label>E-MAIL: VIXMIN@GMAIL.COM</label>
        <label for="">|</label>
        <label>TELEFONE: (27) 12345-6789</label>
</footer>
</body>
  <head>
    <title>Cadatro</title>
    <link rel="icon" href="/img/logo.png">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/cadastro.css">
  </head>
  <body>
    <nav class="nav_bar">
      <a class="nav_text" href="index.php">HOME</a>
    </nav>
    <div class="div_tela">
        <form action="crud/cad_usuario.php" method="post" id="formulario">

        <label class="text" for="inputNome">Nome Completo</label>
        <input class="text" type="text" name="nome">
        <br>
        <label class="text" for="inputEmail">Data De Nascimento</label>
        <input class="text" type="text" name="dt_nascimento">
        <br>
        <label class="text" for="inputEmail">Login</label>
        <input class="text" type="text" name="login">
        <br>
        <label class="text" for="inputEmail">Endereço</label>
        <input class="text" type="text" name="endereco">
        <br>
        <label class="text" for="inputEmail">Email</label>
        <input class="text" type="email" name="email">
        <br>
        <label class="text" for="inputSenha">Senha</label>
        <input class="text" type="password" name="senha">
        <br>
        
  <br>
  <button><a class="text_style" href="listarUsuarios.php">listar</a></button>
  <input type="submit" value="CADASTRAR PESSOA">
        </form>
  </body>
</html>