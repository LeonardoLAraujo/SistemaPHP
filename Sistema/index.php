<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    
    <?php
        if(isset($_SESSION['nao_autenticado'])):
    ?>
    <div class="notification">
        <p>ERRO: Usuário ou senha Inválido</p>
    </div>
    <?php
        endif;
        unset($_SESSION['nao_autenticado']);
    ?>

    <form name="frm_entrarConta" action="logar.php" method="POST">
        <div class="home_content">
            <div class="home">
                <h1>Acesse Sua Conta</h1>
                <div class="text">
                    <p>Usuário ou E-mail</p>
                    <input type="text" name="txt_usuario">
                    <p>Senha</p>
                    <input type="password" name="txt_senha">
                </div>

                <div class="btn_entrar">
                    <input class="entrar" type="submit" name="txt_button" value="Entrar" onClick="document.frm_entrarConta.action='logar.php'" >
                    <a href="cadastrarConta.php"><input type="button" name="txt_button" value="Cadastrar"></a>
                </div>
            </div>
        </div>
    </form>

</body>
</html>