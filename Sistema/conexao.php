<?php

    $servidor = "127.0.0.1";
    $user =  "root";
    $senha = "usbw";
    $banco = "projeto1";

    mysql_connect($servidor, $user, $senha) or die ("Erro ao tentar Conectar com o Servidor!!");
    mysql_select_db($banco) or die ("Erro ao Conectar com o Banco de Dados");

?>