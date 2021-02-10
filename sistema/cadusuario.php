<?php
	//conexão com banco de dados
	include_once("conexaodb.php");

	//variáveis
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$obs = $_POST['obs'];

	//criar senha SHA1
	$passwd = sha1($senha,TRUE);

	//insert SQL
	$inserir = "INSERT INTO usuario (nome, senha, email, telefone, cidade, estado, observacao)
							Values ('".$nome."','".$passwd."','".$email."','".$telefone."','".$cidade.
									"','".$estado."','".$obs."')";

	//verficiar inserção de dados
	if (mysqli_query($conn, $inserir)) {
		echo "Usuário cadastrado com sucesso";
	}else {
		echo "Usuário não cadastrado";
	}
?>
