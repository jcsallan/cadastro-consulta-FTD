<?php include("cabecalho.php");
	if(!isset($_COOKIE["usuario_logado"])) {
		header("Location:MenuIniciar.php?falhaDeSegurança=true");
		die();
}	
?>
			
			<h1>Cadastro de Colaborador</h1>
			<form action="adiciona_user.php" method="post">
				<table class="table">
					<tr>
						<td>Nome:</td>
						<td><input class="form-control" type="text" name="nome" placeholder="Digite seu nome" ></td>
					</tr>
					<tr>
						<td>Departamento:</td>
						<td><input class="form-control" type="text" name="departamento" placeholder="Digite seu departamento"></td>
					</tr>
					<tr>
						<td>Cargo:</td>
						<td><input class="form-control" type="text" name="cargo" placeholder="Digite seu cargo"></td>
					</tr>
					<tr>
					<tr>
						<td>Data de Nascimento:</td>
						<td><input class="form-control" type="text" name="nascimento" placeholder="AAAAMMDD"></td>></td>
					</tr>
						
						<td>
							<button class="btn btn-primary" type="submit">Cadastrar</button>
						</td>
					</tr>
				</table>
			</form>
<?php include("rodape.php");?>
