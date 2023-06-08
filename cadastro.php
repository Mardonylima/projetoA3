<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style> 
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, green, yellow);
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
            width: 100%;
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
    h1{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            color: white;
            filter: drop-shadow(2px 2px 2px black);
            background: linear-gradient(90deg, #8A2BE2, #191970, #00FFFF);
            background-clip: border-box;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

    </style>
</head>
<body>
    <div >
        <h1>criar novo login:</h1>
        <form id= "cadastro" action="cadastrar.php" method="POST">
            nome Completo: <input type="text" name="nome" required> <br> <br>
            login: <input type="text" name="login" required> <br> <br>
            senha: <input type="password" name="senha" required> <br> <br>
            <button> Cadastrar</button> <br> <br>
            <a href="index.php">voltar</a><br>
        </form>
    </div>
</body>
</html>