<?php 



function ConsultarEmail($email, $senhaUsu)
{
  include 'conf.php';
  $conne = new mysqli($serve, $usuario, $senha, $banco);

    $senhaUsu = hash('sha256', $senhaUsu);
    $verificar = $conne->prepare("SELECT * FROM usuario WHERE senha = ? AND email = ?;");
    $verificar->bind_param('ss', $senhaUsu, $email);
    $verificar->execute();
    $verificar = $verificar->get_result();
    $conne->close();
    return $verificar->fetch_assoc();


}



function CadartrarConta($usuarioU, $email, $senhaU)
{
    $senhaUsuario = hash('sha256', $senhaU);
    include 'conf.php';
    $conne = new mysqli($serve, $usuario, $senha, $banco);
    $verificar = $conne->prepare("INSERT INTO usuario(nome, email, senha) VALUE (?, ?, ?);");
    $verificar->bind_param('sss', $usuarioU, $email, $senhaUsuario);
    $verificar = $verificar->execute();
    $conne->close();
    return $verificar;
}

function verifificar_email($email){
  
  include 'conf.php';
  $connecxao = new mysqli($serve, $usuario, $senha, $banco);
  $resultado_da_consulta = $connecxao->prepare("SELECT  nome from usuario where email = ?;");
  $resultado_da_consulta->bind_param('s', $email);
  $resultado_da_consulta->execute();
  $resultado_da_consulta = $resultado_da_consulta->get_result();

  
  $respo = ($resultado_da_consulta->num_rows > 0)? true:false;
  $connecxao->close();
  return $respo;
}




function nova_senha_usuario($email, $nova_senha){
  // connecção com o Banco
  include 'conf.php';
  $connecxao= new mysqli($serve, $usuario, $senha, $banco);

  // Consulta o banco 
  $nova_senha = hash('sha256', $nova_senha);
  $resultado_da_consulta = $connecxao->prepare("UPDATE usuario set usuario.senha = ? WHERE usuario.email = ?;");
  $resultado_da_consulta->bind_param('ss', $nova_senha, $email);
  $resultado_da_consulta->execute();
  $connecxao->close();

}



?>