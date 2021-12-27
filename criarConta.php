<?php
    session_start();
    include 'conexao.php';

    if(empty($_POST['txt_usuario']) || empty($_POST['txt_senha'])){
        header('Location: cadastrarConta.php');
        exit();
    }   

    $usuario = $_POST['txt_usuario'];
    $senha = $_POST['txt_senha'];

    $sql = mysql_query("select * from tb_cadastrar where usuario = '$usuario'");

    if(mysql_num_rows($sql) > 0){
       
        $_SESSION['nao_cadastro'] = true;
        header('Location: cadastrarConta.php');
        exit();

    }else{

        $sql = mysql_query("insert into tb_cadastrar (usuario, senha) 
        values('$usuario', md5('$senha'))");
        
        $_SESSION['cadastro'] = true;
        header('Location: cadastrarConta.php');
        exit();

    }


?>