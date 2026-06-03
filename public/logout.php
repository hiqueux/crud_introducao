<?php
    // inicia ou recupera a sessão atual do usuário.
    session_start();
    // remove todas as variáveis de sessão e dados associados.
    session_destroy();
    // redireciona o usuário para a página de login logout.
    header("Location: ../index.php");
    exit();
?>