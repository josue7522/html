<?php



if(!isset($_SESSION)){
    session_start();
}



if(!isset($_SESSION['idusuario'])){
    die('VOCÊ NÃO PODE ACESSAR ESSA PAGINA, PORQUE NÃO ESTA LOGADO!<p><a href="login.php" class="">ENTRAR</a></p>');
}
 if ($_SESSION['adm']!=1){
    die('VOCÊ NÃO É ADMINISTRADOR!<p><a href="login.php" class="">ENTRAR</a></p>');
}

?>