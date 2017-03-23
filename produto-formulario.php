<?php include("cabecalho.php") ?>

<h2> Formulario de Cadastro </h2>
<form action="adiciona-produto.php" method="post">
	<table class="table">
		<tr>
			<td> Nome: </td>
			<td> <input class="form-control" type="texto" name="nome"> </td>	
		</tr>
		<tr>
			<td> Preco: </td>
			<td> <input class="form-control" type="number" name="preco"> </td>	
		</tr>
		<tr>
			<td> Descrição </td>
			<td><textarea class="form-control" name="descricao"> </textarea></td>
		</tr>
		<tr>
			<td> <button class="btn btn-primary" type="submit"> Cadastrar </button> </td>	
		</tr>
		
	</table>
		
</form>


<?php include("rodape.php") ?>