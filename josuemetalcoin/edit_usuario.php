<?php

    require ("conn.php");

    if (isset($_GET['idusuario'])){
        $idusuario = $_GET['idusuario'];
    }
        else{
            header("Location: index.php");
    }

    $tabela = $pdo->prepare("SELECT * FROM usuario WHERE idusuario=:idusuario;");

    $tabela->execute(array(':idusuario'=>$idusuario));
    $rowTable = $tabela->fetchAll();

?>

<!DOCTYPE HTML>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Editar Usuario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    </head>

    <body>
        <div class="quadrado">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" value=<?php echo $rowTable[0]['nome']?>>
    </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder" value=<?php echo $rowTable[0]['email']?>>
    </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Senha</label>
            <input type="text" name="senha" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder" value=<?php echo $rowTable[0]['senha']?>>
        </div>
                <br>
                <div class= "form-group offset-md-4">
                    <div class="col-md-6">
                        <input type="submit" values="ENVIAR ALTERAÇÕES" class="btn btn-success">
                        <a href="listarUsuarios.php" type="button" class="btn btn-primary float-end">LISTAR USUARIO</a>
                        
                    </div>
                </div>
                <input type="hidden" name='idusuario' value=<?php echo $rowTable[0]['idusuario']?>>
            </form>
            <div id="resultado"></div>
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
        
    </body>
</html>