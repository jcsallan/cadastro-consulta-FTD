<?php include("cabecalho.php");?>
<?php if(isset($_GET["login"]) && $_GET["login"]==true) {?>
	<p class="alert-success">Logado com sucesso!</a>
<?php }?>

<?php if(isset($_GET["login"]) && $_GET["login"]==false) { ?>
	<p class="alert-danger">Usuário ou senha inválido!</a>
<?php }?>

<?php if(isset($_GET["falhaDeSegurança"]) && $_GET["falhaDeSegurança"]==true) { ?>
	<p class="alert-danger">Você não tem acesso a essa funcionalidade!</a>
<?php }?>

				
<head>
<title>Cadastro de Colaborador</title>
</head>
<body>
<h1>Bem vindo ao cadastro de Colaboradores da Editora FTD !</h1>
</body>
<?php if(isset($_COOKIE["usuario_logado"])) {?>
	<p class="text-success">Você está logado como 
<?=$_COOKIE["usuario_logado"] ?>.</p>
		<?php }?>
		<?php if(!isset($_COOKIE["usuario_logado"])) {?>
<h2>Login</h2>
<form action="login.php" method="post">
<table class="table">
	<tr>
		<td>Email</td>
		<td><input class="form-control" type="email" name="email"></td>
	</tr>
	<tr>
		<td>Senha</td>
		<td><input class="form-control" type="password" 
name="senha"></td> 
	</tr>
    <tr> 
		<td><button class="btn btn-primary">Login</button></td>
    </tr>
</table>
</form>
<tr> 
	<td><a class="btn btn-primary" href="inform.php">Informações</a></td>
</tr>
</html>

<?php include("rodape.php");}?>
