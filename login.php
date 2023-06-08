<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body{
            font-family: arial, helvetica, sans-serif;/** tipo de fonte */
            background-image: linear-gradient(45deg, pink, black ); /** cor de fundo */
        }
        div{
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top : 50%;
            left: 50%;
            transform:translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: white; 
            /** todo esse código serve pra centralizar a div, e organizar em tamanhos e cores */
        }
        input{
            padding: 15px;/**largura do input */
            border: none;/**bordas do input */
            outline: none;/** pra tirar uma borda dos inputs*/
            font-size: 15px;/**tamanho da fonte */
            width: 89%;/**tamanho do input*/
        }
        button{
            background-color: dodgerblue; /** cor do botão*/
            border: none; /** borda, aqui esta sem */
            padding: 15px; /**largura do botão */
            width: 100%; /**tamanho do botão */
            border-radius: 10px; /**tamanho das bordas*/
            color:white; /**cor dos nomes */
            font-size: 15px;/**tamanho da fonte */
        }
        button:hover{
            background-color: deepskyblue; /**a cor do botão quando o usuário colocar um mouse no botão */
            cursor: pointer; /** o cursor vai mudar quando interagir com o botão */
        }
        a{
            background-color: green; /**cor do link*/
            border: none;/**borda, aqui esta sem */
            padding: 10px;/**largura do link */
            border-radius: 10px;/**tamanho das bordas */
            color: white;/**cor do link */
            font-size: 15px;/**tamanho da fonte */
        }
        a:hover{
            background-color: greenyellow; /** cor do cursor quando interagir com o link */
        }
        h1{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; /** fonte do texto  */
            color: white; /**cor do texto */
            filter: drop-shadow(2px 2px 2px black);
            /** .gradient-text*/
            background: linear-gradient(90deg, pink, black); /** cores de fundo do texto*/
            background-clip: border-box; /** define como o plano de fundo de um elemento é recortado em relação às bordas do elemento.*/
            -webkit-background-clip: text; /** pra se ajustar ao contorno da letra*/
            -webkit-text-fill-color: transparent;/** pra que a cor fique transparente e o fundo seja exibido no lugar*/
        }

    </style>
</head>
<body>
    <div> 
        
        <h1> bem-vindo </h1> <br> 
        <form id="login" action="logado.php" method="POST"> 
            login: <input type="text" name="login" > <br> <br>
            senha: <input type="password" name="senha" > <br> <br>
            <button>ENVIAR</button> <br> <br> <br>
            Não tem uma conta? Cadastre-se <br><br>
            <a href="cadastro.php" target=_blank> CRIAR LOGIN </a> <br> <br>
            esqueceu a sua senha? mude ela aqui <br><br>
            <a href="Nsenha.php" target=_blank> NOVA SENHA </a> <br> <br>
        </forms>
    </div>
    
</body>
</html>