<?php include("cabecalho.php");
 include("conecta.php");
 include("banco_user.php");

$nome = $_POST["nome"];
$departamento = $_POST["departamento"];
$cargo = $_POST["cargo"];
$nascimento = $_POST["nascimento"];

if(insereColaborador($conexao, $nome, $departamento, $cargo, $nascimento)) { ?>
	<p class="text-success">Colaborador <?= $nome; ?>, adicionado com sucesso!</p>
<?php } else { ?>
	<p class="text-danger">Colaborador <?= $nome; ?>, não foi adicionado!</p>
<?php
}
?>

<?php include("rodape.php");?>
