<?php

    session_start();
    include "conexao.php";

    if(!$_SESSION['usuario']){
        header('Location: index.php');
        exit();
    }


?>