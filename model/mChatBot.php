<?php 
function Salvar_informações($usuarioU,$promptUsuario, $respostaChat)
{
    include 'conf.php';
    $conne = new mysqli($serve, $usuario, $senha, $banco);
    $verificar = $conne->prepare("INSERT INTO respostaPronpt(codUsuario, msgUsuario, msgChat) VALUES (?, ?, ?);");
    $verificar->bind_param('iss', $usuarioU, $promptUsuario, $respostaChat);
    $verificar = $verificar->execute();

    
    $conne->close();
    return $verificar;

}




function CarregaInformações($usuarioU)
{
    include 'conf.php';
    $conne = new mysqli($serve, $usuario, $senha, $banco);
    $dados = $conne->query("SELECT  msgUsuario, msgChat FROM respostaPronpt where codUsuario = $usuarioU;");
    $dados = $dados->fetch_all(MYSQLI_ASSOC);
    $conne->close();
    return $dados;


}




function BuscaUsuario($usuarioU)
{
    include 'conf.php';
    $conne = new mysqli($serve, $usuario, $senha, $banco);
    $dados = $conne->query("SELECT nome FROM usuario where codigo = $usuarioU;");
    $usuario = $dados->fetch_assoc() ['nome'];
    $conne->close();
    return $usuario;
}












?>