<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['alterar-senha'])) {
    $senhaAtual = $_POST['senha-atual'];
    $novaSenha = $_POST['nova-senha'];
    $confirmarSenha = $_POST['confirmar-senha'];

    // Verifica se a nova senha e a confirmação coincidem
    if ($novaSenha !== $confirmarSenha) {
        echo "A nova senha e a confirmação não coincidem.";
        exit();
    }

    // Consulta SQL para verificar se a senha atual está correta
    $sql = "SELECT senha FROM login WHERE senha = '$senhaAtual'";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows === 1) {
        // A senha atual está correta, pode prosseguir com a alteração da senha
        $sql = "UPDATE login SET senha = '$novaSenha' WHERE senha = '$senhaAtual'";

        if ($conexao->query($sql) === TRUE) {
            echo "Senha alterada com sucesso.";   //** '<div style="text-align: center;">Senha alterada com sucesso.</div>'; */
        } else {
            echo "Erro ao alterar a senha: " . $conexao->error;
        }
    } else {
        echo "Senha atual incorreta.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Nsenha</title>
  <style> 
        body{
            font-family: arial, helvetica, sans-serif;
            background-image: linear-gradient(45deg, black, white,black );
        }
        div{
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top : 50%;
            left: 50%;
            transform:translate(-50%,-50%);
            padding: 60px;
            border-radius: 15px;
            color: white;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            width: 90%;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 90%;
            border-radius: 10px;
            color:white;
            font-size: 15px;
        }
        button:hover{
            background-color: deepskyblue;
             cursor: pointer; 
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
        
</style>
</head>
<body>
<div>
  <h1>alterar Senha</h1>
  <form action="" method="POST">
    <label for="senha-atual">Senha atual:</label> 
    <input type="password" id="senha-atual" name="senha-atual" required><br><br>
    <label for="nova-senha">Nova senha:</label>
    <input type="password" id="nova-senha" name="nova-senha" required><br><br>
    <label for="confirmar-senha">Confirmar nova senha:</label>
    <input type="password" id="confirmar-senha" name="confirmar-senha" required><br><br>
    <button type="submit" name="alterar-senha">Alterar Senha</button><br><br><br>
    <a href="index.php">Voltar</a>
  </form>
</div>
</body>
</html>