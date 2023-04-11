<?php
    include ('../conn.php');

    $nome = $_POST['nome'];
    $dt_nascimento = $_POST['dt_nascimento'];
    $login = $_POST['login'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(empty($nome) || empty($dt_nascimento) || empty($login) || empty($endereco) || empty($email) || empty($senha)){
        echo "Voce precida preencher todos os campos";
    }else{
        $cad_usuario = $pdo->prepare('INSERT INTO usuario (nome, dt_nascimento,login , endereco, email, senha) values (:nome, :dt_nascimento, :login, :endereco, :email, :senha)');
        $cad_usuario->execute(array(
            ':nome'=>$nome,
            ':dt_nascimento'=>$dt_nascimento,
            ':login'=>$login,
            ':endereco'=>$endereco,
            ':email'=>$email,
            ':senha'=>$senha
        )
        );

        echo "<script>
        alert('Usuario Cadastrado!')
        </script>";

    }

?>