<?php include("cabecalho.php");
include("conecta.php");
include("banco_user.php");

$id = $_GET['id'];
$nome = buscaColaborador($conexao, $id);
		
?>		
			<h1>Alterando cadastro de Colaborador</h1>
			<form action="altera_user.php" method="post">
				<input type="hidden" name="id" value="<?=$nome['id']?>">
				<table class="table">
					<tr>
						<td>Nome:</td>
						<td><input class="form-control" type="text" name="nome" value="<?=$nome['nome']?>"></td>
					</tr>
					<tr>
						<td>Departamento:</td>
						<td><input class="form-control" type="text" name="departamento" value="<?=$nome['departamento']?>"></td>
					</tr>
					<tr>
						<td>Cargo:</td>
						<td><input class="form-control" type="text" name="cargo" value="<?=$nome['cargo']?>"></td>
					</tr>
					<tr>
						<td>Data de Nascimento:</td>
						<td><input class="form-control" type="text" name="nascimento" value="<?=$nome['nascimento']?>"></td>
					</tr>
					<tr>
						<td>
							<button class="btn btn-primary" type="submit">Alterar</button>
						</td>
					</tr>
				</table>
			</form>
<?php include("rodape.php");?>
