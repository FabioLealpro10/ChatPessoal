<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cadastro</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: #121212;
      color: #e0e0e0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .cadastro-container {
      background-color: #1e1e1e;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.7);
      width: 100%;
      max-width: 450px;
    }

    h1 {
      text-align: center;
      color: #ffffff;
      margin-bottom: 20px;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-top: 12px;
      font-weight: 600;
      color: #bbbbbb;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      margin-top: 6px;
      padding: 10px;
      background-color: #2c2c2c;
      color: #fff;
      border: 1px solid #444;
      border-radius: 8px;
      outline: none;
      transition: border 0.3s;
    }

    input:focus {
      border-color: #007bff;
    }

    input[type="submit"] {
      margin-top: 20px;
      padding: 12px;
      background-color: #007bff;
      border: none;
      color: white;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }

    a {
      display: block;
      text-align: center;
      margin-top: 15px;
      color: #00aaff;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    #erro{
      color: #ff4d4d;
      text-align: center;
      margin-bottom: 10px;
    }
    #sucesso{
      color:rgb(30, 230, 30);
      text-align: center;
      margin-bottom: 10px;
    }

  </style>
</head>
<body>
  <div class="cadastro-container">
    <h1>Cadastrar Novo Usuário</h1>
    <p id="{{resposta}}">{{msg}}</p>
    <form action="cCadastro.php" method="post">
      <label for="nome">Nome:</label>
      <input placeholder="Digite seu nome..." name="usuario" type="text" required>

      <label for="email">Email:</label>
      <input placeholder="Digite seu email.." name="email" type="email" required>

      <label for="senha_criar">Criar Senha:</label>
      <input placeholder="Crie uma senha..." name="senha_cri" type="password" required>

      <label for="comfirma_senha">Confirmar Senha:</label>
      <input placeholder="Confirme sua senha acima.." name="senha_com" type="password" required>

      <input type="submit" name="cadastrar" value="Cadastrar">
    </form>
    <a href="index.php">Fazer login</a>
  </div>
</body>
</html>
