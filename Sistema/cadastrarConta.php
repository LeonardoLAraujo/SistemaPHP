<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Conta</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    
    <?php
        if(isset($_SESSION['cadastro'])):
    ?>
    <div class="notification">
        <p>Usuário Cadastrado com Sucesso</p>
    </div>
    <?php
        endif;
        unset($_SESSION['cadastro']);
    ?>

    <?php //CADASTRO JÁ EXISTE
        if(isset($_SESSION['nao_cadastro'])):
    ?>
    <div class="notification">
        <p>Usuário Já Cadastrado</p>
    </div>
    <?php
        endif;
        unset($_SESSION['nao_cadastro']);
    ?>

    <form name="frm_cadastrarConta" method="POST">
        <div class="home_content">
            <div class="home">
                <h1>Cadastre Sua Conta</h1>
                <div class="text">
                    <p>Usuário ou E-mail</p>
                    <input type="text" name="txt_usuario">
                    <p>Senha</p>
                    <input type="password" name="txt_senha">
                </div>

                <div class="btn_entrar">
                    <input type="submit" name="txt_button" value="Cadastrar" onClick="document.frm_cadastrarConta.action='criarConta.php'">
                    <a href="index.php"><input type="button" name="txt_button" value="Entrar"></a>
                </div>
            </div>
        </div>
    </form>

</body>
</html>