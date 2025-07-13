<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueceu Senha</title>
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px;
        }

        h1 {
            color: #ffffff;
        }

        form {
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            max-width: 400px;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #cccccc;
        }

        input[type="email"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="email"] {
            background-color: #2a2a2a;
            color: #ffffff;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            margin-top: 20px;
            color: #66b0ff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Mensagens de resposta */
        #successo {
            color: #4caf50;
            margin-bottom: 20px;
        }

        #erro {
            color: #ff4c4c;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Esqueceu a Senha</h1>

    <p id="{{resposta}}">{{msg}}</p>

    <form action="cEsquecelSenha.php">
        <label for="email">E-mail</label>
        <input type="email" id="email" placeholder="Informe seu Email de cadastro..." name="email" value="{{email}}" required>
        <input type="submit" name="mandar" value="Enviar">
    </form>

    <a href="index.php">Voltar</a>
</body>
</html>
