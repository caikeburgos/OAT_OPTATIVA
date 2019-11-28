<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['enviar'])) {

	$nome = $_POST['nome'];
	$valor = $_POST['valor'];
	$descricao = $_POST['descricao'];

	$sql = "INSERT INTO produtos (nome,valor,descricao) VALUES ('$nome',$valor,'$descricao')";

	executar_sql($conexao, $sql);


	echo "Produto '" . $nome . "' cadastrado com sucesso!";

}

?>

<br><br>
<a href="?pg=listar">Ir para listagem de produtos</a>
