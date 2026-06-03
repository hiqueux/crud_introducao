<?php

    // inclui o arquivo responsável pela conexão com o banco de dados.
    include("../infra/db/connect.php");

    // verifica se existe um usuário autenticado na sessão.
    if(!isset($_SESSION["usuario"])){
        header("Location: ../index.php");
        exit();
    }

    // verifica se o formulário foi enviado.
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // recebe os dados do formulário.
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        // insere os dados do novo usuário no banco de dados.
        $sql = "INSERT INTO users (username, password) VALUES ('$usuario','$senha')";
        // vai executar a consulta no banco de dados.
        if($conn -> query($sql) === TRUE){
            echo "<script>alert('Usuário Cadastrado com sucesso!')</script>";
        }else{
            echo "<script>alert('Erro Usuário Não Cadastrado!')</script>";
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <?php
        // inclui o componente responsável pela exibição da navbar.
        include("../public/component/navbar.php");
    ?>
    <h2>Bem-vindo!</h2>
    <p> Usuário logado: 
    <!-- exibe o nome do usuário autenticado na sessão. -->
        <?php echo $_SESSION["usuario"];?>
    </p>

    <!-- formulário para cadastrar um novo usuário. -->
    <h4>Cadastrar Novo Usuário</h4>
    <form method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <?php
    // inclui o componente responsável pela exibição da tabela de usuários.
    include("../public/component/table.php");
    ?>

    <a href="logout.php">Sair</a>
    
</body>
</html>