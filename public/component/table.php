<hr>

<h4> Usuários Cadastrados</h4>

<table border="1" cellpadding="2">

    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
    </tr>

    <?php
    
    // consulta SQL para buscar todos os usuários cadastrados no banco.
    $sqlUsuarios = "SELECT * FROM users";

    // executa a consulta no banco de dados.
    $resultadoUsuarios = $conn -> query($sqlUsuarios);

    // verifica se foram encontrados usuários.
    while($linha = $resultadoUsuarios->fetch_assoc()){
        
        // exibe os dados de cada usuário em linha de tabela.
        echo "<tr>
        
            <td>" . $linha["id"] . "</td>
            <td>" . $linha["username"] . "</td>
            <td>" . $linha["password"] . "</td>
        
        </tr>";
    }
    
    ?>

</table>