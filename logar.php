<?php

    session_start();
    include 'conexao.php';
    
    $usuario = $_POST['txt_usuario'];
    $senha = $_POST['txt_senha'];

    if(empty($_POST['txt_usuario']) || empty($_POST['txt_senha'])){
        header('Location: index.php');
        exit();
    }   

    $query = "select * from tb_cadastrar where usuario='{$usuario}' and senha=md5('{$senha}')";

    $result = mysql_query($query);
    $row = mysql_num_rows($result);

    if($row == 1){
        $_SESSION['usuario'] = $usuario;
        header('Location: painel.php');
        exit();
    }else{
        $_SESSION['nao_autenticado'] = true;
        header('Location: index.php');
        exit();
    }

?>