<?php include("cabecalho.php");
 include("conecta.php"); 
 include("banco_user.php"); 
 
 if(!isset($_COOKIE["usuario_logado"])) {
		header("Location:MenuIniciar.php?falhaDeSegurança=true");
		die();
}	
 
 ?>
 
<table class="table table-striped table-bordered">
		<?php
		$nomes = listaColaborador($conexao);
		foreach($nomes as $nome) :
	?>
	<tr>
		<td>Nome</td>
		<td>Departamento</td>
		<td>Cargo</td>
		<td>Data de nascimento</td>
	</tr>
	<tr>
		<td><?= $nome['nome']?></td>
		<td><?= $nome['departamento']?></td>
		<td><?= $nome['cargo']?></td>
		<td><?= $nome['nascimento']?></td>
		<td><a class="btn btn-primary" href="altera_cadastro.php?id=<?=$nome['id']?>">Alterar</a></td>
		<td>
			<form action="remove_user.php" method="post">
				<input type="hidden" name="id" value="<?=$nome['id']?>">
				<button class="btn btn-danger">Remover</button>
			</form>
		</td>
	</tr>
	<?php
		endforeach

	?>
</table>
<?php include("rodape.php") ?>
