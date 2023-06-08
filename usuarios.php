<!DOCTYPE html>
<html>
<head>
    <title>usuarios</title>
    <style> 
         body{
            font-family: arial, helvetica, sans-serif;
            background-image: linear-gradient(45deg, green, blue, purple); 
        }
        div{
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top : 50%;
            left: 50%;
            transform:translate(-50%,-50%);
            padding: 80px;
            border-radius: 25px;
            color: white;
        }
        a{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color:white;
            font-size: 15px;
        }
        a:hover{
            background-color: deepskyblue;
             cursor: pointer; 
        }
        h1{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            color: white;
            filter: drop-shadow(2px 2px 2px black);
            background: linear-gradient(90deg, #8A2BE2, #7CFC00, #DC143C);
            background-clip: border-box;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

</style> 
</head>
<body>
    <div> 
    <h1></h1><br><br><br>
    <h1>Lista de usuários</h1>

    <?php
    include('conexao.php');

    // Verifica se houve erro na conexão
    if ($conexao->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
    }

    // Consulta os cadastros na tabela "login"
    $sql = "SELECT * FROM login";
    $result = $conexao->query($sql);

    // Verifica se há registros retornados pela consulta
    if ($result->num_rows > 0) {
        // Exibe os dados de cada registro
        while ($row = $result->fetch_assoc()) {
            echo "Nome: " . $row["nome"] . "<br>";
            echo "Login: " . $row["login"] . "<br>";
            echo "<br>";
        }
    } else {
        echo "Nenhum cadastro encontrado.";
    }

    // Fecha a conexão com o banco de dados
    $conexao->close();
    ?>
    <br> <a href="index.php">Voltar</a> <br>
</div>
</body>
</html>