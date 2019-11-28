<?php

if(isset($_GET['acao']) == 'remover'){
	$id = $_GET['id'];

	$sql = "DELETE FROM produtos WHERE id = " . $id;

	$result = executar_sql($conexao, $sql);

	if($result === TRUE){
		echo "Produto excluído com sucesso!";
	}
}

?>

<h1>Listagem dos Produtos</h1>

<table class="table">
	
	<tr>
		<td><b>id</b></td>
		<td><b>Nome</b></td>
		<td><b>Valor</b></td>
		<td><b>Descrição</b></td>
		<td><b>Editar Informações</b></td>
		<td><b>Excluir Produto</b></td>
	</tr>

	<?php 		

		$sql = "SELECT * FROM produtos";

		$result = executar_sql($conexao, $sql);		

		if ($result) {
		    
		    while ($row = $result->fetch_object()) {

		    	?>


				<tr>
			        <td><b><?= $row->id ?></b></td>
			        <td><?= $row->nome ?></td>
			        <td><?= $row->valor ?></td>
			        <td><?= $row->descricao ?></td>
			        <td><a href="?pg=alterar&id=<?= $row->id ?>">Alterar</a></td>
			        <td><a href="?pg=listar&acao=remover&id=<?= $row->id ?>" onclick="return confirm('Desejar remover este item?');">Remover</a></td>
		        <tr>

		    	<?php
		    }
		    
		    $result->close();
		}

	?>
	

</table>