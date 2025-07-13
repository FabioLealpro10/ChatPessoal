<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
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

    .login-container {
      background-color: #1e1e1e;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.7);
      width: 100%;
      max-width: 400px;
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

    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #007bff;
    }

    .links {
      margin-top: 12px;
      display: flex;
      justify-content: space-between;
    }

    .links a {
      color: #00aaff;
      text-decoration: none;
      font-size: 0.9em;
    }

    .links a:hover {
      text-decoration: underline;
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

    p {
      color: #ff4d4d;
      text-align: center;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h1>Login</h1>
    <p>{{msg}}</p>
    <form action="index.php" method="post">
      <label for="Email">Email:</label>
      <input placeholder="Digite seu email..." autofocus name="email" type="email" required />

      <label for="Senha">Senha:</label>
      <input name="senha" placeholder="Digite sua senha..." type="password" required />

      <div class="links">
        <a href="cEsquecelSenha.php">Esqueceu a senha?</a>
        <a href="cCadastro.php">Criar conta</a>
      </div>

      <input type="submit" name="logar" value="Logar" />
    </form>
  </div>
</body>
</html>
