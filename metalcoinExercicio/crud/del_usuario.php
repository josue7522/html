<?php

    require('../conn.php');

    if(isset($_GET['idusuario'])){
        $idusuario = $_GET['idusuario'];
    }else{
        header("Location: ../index.php");
    }
    
    $del_usuario = $pdo->prepare('DELETE from usuario where idusuario = :idusuario;');
    $del_usuario->execute(array(':idusuario'=>$idusuario));

    echo "<script>
        alert('Usuario Deletado!')
        </script>";
?>