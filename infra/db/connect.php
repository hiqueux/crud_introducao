<?php
    // inicia ou recupera a sessão atual do usuário.
    session_start();
    // define as credenciais de conexão com o banco de dados.
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples";
    // estabelece a conexão com o banco de dados usando as credenciais fornecidas.
    $conn = new mysqli($host,$user,$pass,$db);

    // if($conn->connect_error){
    //     die("Erro na conexão");
    // }else{
    //     echo ("<p> BD: ok </p>");
    // }
?>