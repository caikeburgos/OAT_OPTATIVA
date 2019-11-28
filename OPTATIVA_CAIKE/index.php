<?php

require_once("config/conexao_bd.php");

$conexao = conecta_bd();

require_once("config/config_geral.php");

$pagina = 'inicio';

if(isset($_GET['pg'])){
    $pagina = $_GET['pg'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>OAT CAIKE BURGOS --OPTATIVA--</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/estilo-grid.css">

	<link rel="stylesheet" type="text/css" href="css/estilo-grid-1200.css" media="screen and (max-width:1200px)">

	<link rel="stylesheet" type="text/css" href="css/estilo-grid-1024.css" media="screen and (max-width:1024px)">

	<link rel="stylesheet" type="text/css" href="css/estilo-grid-600.css" media="screen and (max-width:600px)">

	<link rel="stylesheet" type="text/css" href="css/estilo-grid-320.css" media="screen and (max-width:320px)">

</head>
<body>

	<div id="container">

		<div id="header">
			<h1>Produtos de Padaria</h1>			
		</div>

		<div id="menu">
			<ul>
				<li class="<?= ($pagina == 'inicio')?'active':'' ?>"><a href="?pg=inicio">Início</a></li>
				<li class="<?= ($pagina == 'cadastro')?'active':'' ?>"><a href="?pg=cadastro">Cadastrar</a></li>
				<li class="<?= ($pagina == 'listar')?'active':'' ?>"><a href="?pg=listar">Listar</a></li>
				<li class="<?= ($pagina == 'sobre')?'active':'' ?>"><a href="?pg=sobre">Sobre</a></li>
			</ul>
		</div>		

		<div id="main">
			
			<div id="content">
				<?php 

      			include("paginas/".$pagina.".php"); 
    			?>		
			</div>
	</div>
	<div id="footer">
		<p>Todos os direitos reservados.</p>
	</div>
</div>

</body>
</html>