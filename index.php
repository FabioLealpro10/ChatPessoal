<?php 


include 'model/mLoguin.php';
$html = file_get_contents('Visao/vLogin.php');
$mensagem = '';

if(isset($_GET['sair']))
{
    session_start();
    session_destroy();
}
else if (isset($_POST['logar']))
{
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $resposta = ConsultarEmail($email, $senha);
    
    if ($resposta != null)
    {
        session_start();
        $_SESSION['codigo_usuario'] = $resposta['codigo'];
        header("Location: cChatBot.php");
        exit();
    }else{
        $mensagem = 'Credenciais invalidas';
    }
    
}

$html = str_replace("{{msg}}", $mensagem, $html);
echo $html;








?>
