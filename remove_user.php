 <?php include("cabecalho.php");
 include("conecta.php");
 include("banco_user.php");
 
  $id = $_POST['id'];
 removeUser($conexao, $id);
 
 if(removeUser($conexao, $id)) { ?>
	<p class="text-success">Colaborador <?= $id; ?>, removido com sucesso!</p>
<?php } else { ?>
	<p class="text-danger">Colaborador <?= $id; ?>, não foi removido devido a ter horas apontadas!</p>
<?php
}
?>

<?php include("rodape.php");?>
 
 
 
 
 


 
