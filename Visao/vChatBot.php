<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ChatBot 325</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: linear-gradient(145deg, #1f1c2c, #928dab);
      color: #f0f0f0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 40px 20px;
    }

    h1 {
      margin-bottom: 30px;
      font-size: 2rem;
      color: #ffffff;
      text-shadow: 1px 1px 4px #000;
    }

    .chat-container {
      background: rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(8px);
      width: 100%;
      max-width: 700px;
      height: 400px;
      overflow-y: auto;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 0 25px rgba(0,0,0,0.4);
      margin-bottom: 20px;
      border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .chat-container::-webkit-scrollbar {
      width: 6px;
    }

    .chat-container::-webkit-scrollbar-thumb {
      background: #555;
      border-radius: 4px;
    }

    .msg-usuario {
      background-color: #00bcd4;
      color: #ffffff;
      padding: 12px 16px;
      border-radius: 18px 18px 0 18px;
      max-width: 75%;
      margin: 10px 0;
      align-self: flex-end;
      margin-left: auto;
      text-align: right;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    .msg-chat {
      background-color: #4caf50;
      color: #ffffff;
      padding: 12px 16px;
      border-radius: 18px 18px 18px 0;
      max-width: 75%;
      margin: 10px 0;
      align-self: flex-start;
      margin-right: auto;
      text-align: left;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    form {
      display: flex;
      width: 100%;
      max-width: 700px;
      gap: 10px;
    }

    input[type="text"] {
      flex: 1;
      padding: 12px;
      border: none;
      border-radius: 8px;
      background-color: #ffffff;
      color: #333;
      outline: none;
    }

    input[type="text"]::placeholder {
      color: #777;
    }

    input[type="submit"] {
      padding: 12px 20px;
      background-color: #ff4081;
      border: none;
      border-radius: 8px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #e91e63;
    }

    .voltar-link {
    margin-top: 40px;
    text-decoration: none;
    color: #ffffff;
    font-weight: bold;
    background-color: rgba(255, 255, 255, 0.1);
    padding: 10px 20px;
    border-radius: 8px;
    transition: all 0.3s;
    }

    .voltar-link:hover {
 
    background-color: rgba(255, 255, 255, 0.2);
    color: #ff4081;
    text-shadow: 0 0 5px #ff4081;
    }
    #criador{
    margin-top: 60px;
    display: inline-block;
    background-color: #24292e;
    color: #ffffff;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 8px;
    font-family: Arial, sans-serif;
    font-weight: bold;
    transition: background-color 0.3s ease;
    }

  </style>
</head>
<body>
  <h1 title="Arizona Gaming Intelligence Alliance" alt='Arizona Gaming Intelligence Alliance'>AGIA</h1>

  <div class="chat-container" id="chat">
    {{mensagens}}
  </div>

  <form action="cChatBot.php" method="post">
    <input placeholder="Faça uma pergunta ou tire uma dúvida..." type="text" name="pronpt" required autofocus>
    <input type="submit" value="ENVIAR" name="msg">
  </form>


  <a class="voltar-link" href="index.php?sair=sair">Voltar para o login</a>

  <script>
    const chat = document.getElementById("chat");
    chat.scrollTop = chat.scrollHeight;
</script>
  <footer>
  

    <a id="criador" href="https://github.com/FabioLealpro10?tab=repositories" target="_blank" >
    Repositorio do GitHub</a>

    

  </footer>
</body>
</html>
