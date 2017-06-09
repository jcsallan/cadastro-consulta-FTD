<?php
function listaColaborador($conexao) {
	$nomes = array();
	$resultado = mysqli_query($conexao, "select * from funcionario");
	while($nome = mysqli_fetch_assoc($resultado)) {
		array_push($nomes, $nome);
	}
	return $nomes;
}

function insereColaborador($conexao, $nome, $departamento, $cargo, $nascimento) {
	$query = "insert into funcionario (nome, departamento, cargo, nascimento) values ('{$nome}', '{$departamento}', '{$cargo}', '{$nascimento}')";
	return mysqli_query($conexao, $query);
}

function alteraColaborador($conexao, $id, $nome, $departamento, $cargo, $nascimento) {
	$query = "update funcionario set nome = '{$nome}', departamento = '{$departamento}', cargo = '{$cargo}', nascimento = '{$nascimento}' where id = '{$id}'";
	return mysqli_query($conexao, $query);
}



function buscaColaborador($conexao, $id) {
		$query = "select * from funcionario where id = {$id}";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
}


function removeUser($conexao, $id) {
	$query = "delete from funcionario where id = {$id}";
	return mysqli_query($conexao, $query);
}
