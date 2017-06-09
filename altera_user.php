<?php include("cabecalho.php");
 include("conecta.php");
 include("banco_user.php");

$id= $_POST["id"];
$nome = $_POST["nome"];
$departamento = $_POST["departamento"];
$cargo = $_POST["cargo"];
$nascimento = $_POST["nascimento"];

if(alteraColaborador($conexao, $id, $nome, $departamento, $cargo, $nascimento)) { ?>
	<p class="text-success">Colaborador <?= $nome; ?>, alterado com sucesso!</p>
<?php } else { ?>
	<p class="text-danger">Colaborador <?= $nome; ?>, não foi alterado!</p>
<?php
}
?>

<?php include("rodape.php");?>
