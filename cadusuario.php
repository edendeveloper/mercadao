<!DOCTYPE html5>
<html lang="pt-br">
<head>
	<title>Mercado Municipal de Americana</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<link rel="stylesheet" type="text/css" href="_css/cadastro.css">
	<link rel="icon" href="_imagens/logo.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="_imagens/logo.ico" type="image/x-icon" />    
</head>
<body>
<div id="interface">
	<header id="cabecalho">
		<figure id="logo">
			<a href="index.html"><img src="_imagens/logo.png"></a>
		</figure>	
		<nav id="menu">
			<ul>
				<li><a href="lojas.html">Lojas</a></li>
				<li><a href="acervo.html">Acervo</a></li>
				<li><a href="noticias.html">Noticías</a></li>
				<li><a href="como-chegar.html">Como chegar</a></li>
				<li><a href="sobre.html">Sobre</a></li>
				<li><a href="contato.html">Contato</a></li>
				<li><a href="eventos.html">Eventos</a></li>
				<li><a href="cadastro.html">Cadastro</a></li>
			</ul>
		</nav>
	</header>

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
	<footer id="rodape">
		<section id="fale-conosco">
    	
        	<h1 id="titulo-fale">Fale Conosco</h1>
      		
      		<div id="form-holder">
		   		<form method="post" action="enviar.php">
		        	
		        	<div class="espaco">
		        	<label></label>
		            <input name="nomex" placeholder="Nome">
		            </div>

		            <div class="espaco">
		            <label></label>
		            <input name="email" type="email" placeholder="E-mail">
		            </div>

		            <div class="espaco">
		            <label></label>
		            <textarea name="msg" placeholder="Mensagem"></textarea>
		            </div>		  

		            <div id="botao-sub">
		            <button class="botao-submit" type="submit" name="submit">Enviar</button>
					</div>

		        </form>
        	</div>
    	</section>

    	
    	<aside id="contatos">    
    		<h1> Contatos </h1>   		  		
		    	<div id="bloco-contatos">
		    		<h2> Email </h2>
		    		<h4> mercadao.americanasp@hotmail.com</h4>
		    		<h2> Telefone </h2>
		    		<h4> 19 3466-0000 </h4>
		    		<h2> Endereço </h2>
		    		<h4> Av. Dr. Antônio Lobo, 8 - Centro, </h4> 
		    		<h4> Americana - SP, 13465-005 </h4>
		    	</div>
    	</aside>
    	<figure id="anuncio01">
    		<img src="_imagens/anuncio-logitech.png">
    	</figure>
    	<figure id="anuncio02">
    		<img src="_imagens/anuncie-aqui.png">
    	</figure>
		<p>Copyright 2019 &copy; - by Welington Manfrim <br/>
		<a href="https://www.facebook.com/Mercado-Municipal-237562232955245/" target="_blank">Facebook </a>| 
		<a href="https://twitter.com/EdenLothus" target="_blank">Twitter</a></p>
	</footer>
</div>
<body>
</html>
