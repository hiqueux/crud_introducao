<?php

// inclui a conexão com o banco de dados.
include("infra/db/connect.php");

// verifica se o formulário foi enviado.
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // ele recebe os dados do formulário.
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    // consulta usuário e senha no banco.
    $sql = "SELECT * FROM users 
    WHERE username = '$usuario' 
    AND password = '$senha'";

    // vai executar a consulta no banco de dados.
    $resultado = $conn -> query($sql);

    // verifica se o usuário foi encontrado.
    if($resultado -> num_rows > 0){
        $_SESSION["usuario"] = $usuario;
        header("Location: public/home.php");
        exit();
    }else{
        $erro = "Usuário ou senha inválidos.";
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com PHP</title>
</head>
<body>
    <?php
    // inclui o componente responsável pela exibição da tabela de usuários.
    include("../public/component/table.php");
    ?>
    <!-- Formulário de autenticação -->
    <h2>Login com PHP</h2><form method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>
        <?php

            if(isset($erro)){
                echo $erro;
            }
        ?>
        <button type="submit">Entrar</button>
    </form>
    


    
</body>
</html>