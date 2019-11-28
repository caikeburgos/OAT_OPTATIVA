<?php

$id = $_GET['id'];

if (isset($_POST['enviar'])) {


	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$valor = $_POST['valor'];


	$sql = "UPDATE produtos SET nome='$nome',descricao='$descricao', valor='$valor'";

	$sql .= " WHERE id = " . $id;	

	executar_sql($conexao, $sql);

}

$sql = "SELECT * FROM produtos WHERE id = " . $id;

$result = executar_sql($conexao, $sql);

$produto = null;

if (!($produto = $result->fetch_object())) {

	echo "Problema ao buscar produto.";

}

?>

<h1>Formulário de Alteração</h1>

<form action="" class="form-group" method="POST" enctype="multipart/form-data">
<p>Nome: <input type="text" name="nome" value="<?= $produto->nome ?>" id="nome" class="form-control">         
</p>

<p>Descrição: <textarea name="descricao" placeholder="Insira uma descrição breve do produto..." id="descricao" class="form-control" rows="5" cols="50"><?= $produto->descricao ?></textarea></p>

<p>Valor: <input type="number" name="valor" value="<?= $produto->valor ?>" class="form-control" id="valor">
</p>

<p><input type="submit" name="enviar" class="btn btn-primary" value="Enviar"> <input type="reset" name="resetar" class="btn btn-danger" value="Resetar"></p>
</form>