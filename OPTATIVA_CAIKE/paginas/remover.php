<?php

$id = $_GET['id'];

$sql = "DELETE FROM produtos WHERE id = " . $id;

$result = executar_sql($conexao, $sql);

if($result === TRUE){
	echo "Produto excluído com sucesso!";
}


?>