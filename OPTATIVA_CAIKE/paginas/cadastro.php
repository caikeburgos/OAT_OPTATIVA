<h1>Cadastrar Produtos</h1>

<form id="formulario" action="?pg=processar" class="formulario" method="POST" enctype="multipart/form-data">


<div>
	<label>Nome:</label>
	<input type="text" name="nome" id="nome" class="form-control">
</div>


<div>
	<label>Descrição:</label>
	<input type="text" name="descricao" id="descricao" class="form-control">
</div>

<div>
	<label>Valor:</label>
	<input type="text" name="valor" id="valor" class="form-control">
</div>

<p><input type="submit" name="enviar" class="btn btn-primary" value="Enviar"> <input type="reset" name="resetar" class="btn btn-danger" value="Resetar"></p>
</form>