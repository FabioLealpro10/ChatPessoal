<?php 
include 'model/mLoguin.php';
$html = file_get_contents('Visao/vCadatro.php');
$mensagem = '';
if (isset($_POST['cadastrar']))
{
    $nome = $_POST['usuario'];
    $email = $_POST['email'];
    $senha_cri = $_POST['senha_cri'];
    $senha_comf = $_POST['senha_com'];
    $resposta = ($senha_cri == $senha_comf)? CadartrarConta($nome, $email, $senha_cri) : "Senhas inconfapatives.";
    $mensagem = ($resposta === true)? "Conta criada Com Sucesso": (($resposta == false)?"Email já cadastrado.": $resposta);   
    $resposta = ($resposta===true)?'sucesso':'erro';
    $html = str_replace("{{resposta}}", $resposta, $html);
}
$html = str_replace("{{msg}}", $mensagem, $html);
echo $html;










?>

