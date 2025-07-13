<?php

function enviarParaOpenRouter($propt) {
    $token = ''; // Adicione seu tocke da oppem IA

    $data = [
        'model' => 'mistralai/mistral-7b-instruct:free',
        'messages' => [
            ['role' => 'user', 'content' => $propt]
        ]
    ];

    $ch = curl_init("https://openrouter.ai/api/v1/chat/completions");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $token",
        "Content-Type: application/json",
        "HTTP-Referer: https://cChatBot.php", // coloque seu domínio se tiver
        "X-Title: MeuChatBotTeste"
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    $resposta = curl_exec($ch);
    curl_close($ch);

    $respostaArray = json_decode($resposta, true);
    
    return $respostaArray['choices'][0]['message']['content'] ?? 'O limite de resposta por dia foi atigido. Por favor, tente novamente no outro dia.';
}




function DadosHtml($dados, $usuario)
{
    $usuario = BuscaUsuario($usuario);
    $html = '<div class="msg-chat"> Olá '.$usuario.'! sou uma Inteligencia Artificial chamada AGIA. Como possa te ajudar? </div>';
    foreach ($dados as $linha)
    {
        $html .= '
        <div class="msg-usuario">'.$linha['msgUsuario'].'</div>
        <div class="msg-chat">'.$linha['msgChat'].'</div>';
    }
    return $html;
}

function Credenciais($usuario)
{
    if(isset($_POST['msg']))
    {
        $promptUsuario = $_POST['pronpt'];
        $respostaChat = enviarParaOpenRouter($promptUsuario);        
        Salvar_informações($usuario, $promptUsuario, $respostaChat);
        header("Location: cChatBot.php");
        exit();

    }
}


function Logado()
{
    session_start();
    if(!isset($_SESSION['codigo_usuario']))
    { 
        header("Location: cLoguin.php");
        exit();
    }
    return $_SESSION['codigo_usuario'];
}


$usuario = Logado();
include "model/mChatBot.php";
$html = file_get_contents('Visao/vChatBot.php');
Credenciais($usuario);
$carregar = DadosHtml(CarregaInformações($usuario), $usuario);
$html = str_replace("{{mensagens}}", $carregar, $html);
echo $html;

?>

