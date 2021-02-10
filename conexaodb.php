<?php
	//local servidor
	$servername = "localhost";

	//usuário de banco de dados
	$username = "root";

	//senha do usuário de banco de dados
	$password = "";

	//nome do banco de dados
	$dbname = "sistemadb";

	//criar a conexão
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	//conecta ao banco de dados e seleciona o arquivo de banco de dados
	$conectado = mysqli_select_db($conn, $dbname) or die ("Falha ao executar a conexão");

	//verificar conexão
	if (!$conn) {
		die ("Erro na conexão: " . mysqli_connect_error());
	}
	//echo "Conectado com sucesso";
?>