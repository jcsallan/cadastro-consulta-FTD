<?php include("conecta.php");
include ("banco-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if($usuario == null) {
	header("Location: MenuIniciar.php?login=0");
}else{
	setcookie("usuario_logado", $usuario["email"], time() + 60);
	header("Location: MenuIniciar.php?login=1");
}
die();
