<?php
    include ('../conn.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(empty($nome) || empty($sobrenome) || empty($email) || empty($senha)){
        echo "Voce precida preencher todos os campos";
    }else{
        $cad_usuario = $pdo->prepare('INSERT INTO usuario (nome, sobrenome, email, senha) values (:nome, :sobrenome, :login, :email, :senha)');
        $cad_usuario->execute(array(
            ':nome'=>$nome,
            ':sobrenome'=>$sobrenome,
            ':email'=>$email,
            ':senha'=>$senha
        )
        );

        echo "<script>
        alert('Usuario Cadastrado!')
        </script>";

    }

?>